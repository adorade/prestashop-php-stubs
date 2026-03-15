#! /bin/bash

### PrestaShop Stubs Generator
  #
  # This script automatically generates PHP stub files for PrestaShop versions.
  # It downloads PrestaShop releases, cleans unnecessary files, and generates
  # stub declarations using php-stubs/generator.
  #
  # Usage:
  #   ./scripts/create-stub.sh [--version VERSION] [--force] [--clean-cache DAYS]
  #
  # Requirements:
  #   - bash, curl, jq, 7z, shasum, git and generate-stubs (php-stubs/generator)

set -eu -o pipefail

# --- Global Configuration ---
work_dir="$PWD"
scripts_dir=$(realpath $(dirname $0))
# Used for progress reporting in show_step
max_width=$(tput cols 2>/dev/null || echo 100) # Fallback to 100 if tput fails (e.g., in CI)

# --- Argument Parsing ---
SPECIFIC_VERSION=""
FORCE=false
CLEAN_CACHE_DAYS=30
while [ $# -gt 0 ]; do
  case $1 in
    --version)
      SPECIFIC_VERSION="$2"
      shift 2
      ;;
    --clean-cache)
      CLEAN_CACHE_DAYS="$2"
      shift 2
      ;;
    --force)
      FORCE=true
      shift
      ;;
    *)
      shift
      ;;
  esac
done

# --- clean_prestashop ---
# Removes non-essential files from the downloaded source to speed up stub generation.
# Focuses on keeping only relevant PHP logic.
clean_prestashop () {
  local version=$1
  local ps_files="$2"

  show_step "$version" "Cleaning"

  cd "$ps_files"

  # Consolidate deletions into a single pass to reduce filesystem traversal overhead.
  # This is much more efficient when handling the large volume of files in src/
  find . -type f \( \
    \( -path "./admin/filemanager/lang/*" -not -name 'en.php' \) -or \
    -name "index.php" -or \
    -name ".*" -or \
    \( -not -name "*.php" -and -not -name ".git" \) \
  \) -delete

  # Cleanup empty directories left behind
  find . -type d -empty -delete

  cd "$work_dir"
}

# --- ps_download ---
# Fetches the PrestaShop release ZIP from GitHub if it's not already in the temp directory.
ps_download () {
  local version=$1
  local ps_dir="$2"

  mkdir -p "${ps_dir}"

  if [ ! -f "${ps_dir}/prestashop.zip" ]; then
    show_step "$version" "Downloading PrestaShop"
    curl -fsSL "https://github.com/PrestaShop/PrestaShop/releases/download/${version}/prestashop_${version}.zip" \
      -o "${ps_dir}/prestashop.zip"
  fi
}

# --- ps_unpack ---
# Extracts the primary ZIP container.
ps_unpack () {
  local version=$1
  local ps_dir="$2"

  show_step "$version" "Unpacking PrestaShop archive"
  7z x "${ps_dir}/prestashop.zip" -o"${ps_dir}/zip" -y > /dev/null
}

# --- ps_extract ---
# Extracts actual source files from the inner PrestaShop source ZIP.
# Currently configured to extract admin, classes, config, controllers, src.
ps_extract () {
  local version=$1
  local ps_dir="$2"
  local ps_files="$3"

  show_step "$version" "Extracting source files"
  if [ -f "${ps_dir}/zip/prestashop.zip" ]; then
      7z x "${ps_dir}/zip/prestashop.zip" \
        -o"${ps_files}" \
        -ir!'admin/*.php' \
        -ir!'classes/*.php' \
        -ir!'config/*.php' \
        -ir!'controllers/*.php' \
        -ir!'src/*.php' \
        -r -y
  fi
}

# --- prestashop_dl ---
# Orchestrates the full download, unpack, and extraction lifecycle.
prestashop_dl () {
  local version=$1
  local ps_dir="$2" # "{ps_dir}" => "${work_dir}/tmp/${tag}"
  local ps_files="${ps_dir}/files"

  ps_download "$version" "$ps_dir"

  if [ ! -d "${ps_files}" ]; then
    ps_unpack "$version" "$ps_dir"
    ps_extract "$version" "$ps_dir" "$ps_files"
    clean_prestashop "$version" "${ps_files}"
  fi
}

# --- process ---
# Iterates through source files to generate stubs.
# Uses a content-based checksum cache to avoid regenerating stubs for unchanged files.
process () {
  local version=$1
  local ps_dir="$2"   # "{ps_dir}" => "${work_dir}/tmp/${tag}"
  local ps_files="$3" # "{ps_files}" => "${ps_dir}/files"
  local cache_dir="${work_dir}/.cache"

  show_step "$version" "Processing"

  rm -rf "${ps_dir}/stubs"

  files=$(find "$ps_files" -name '*.php' | sort)

  for file in $files; do
    stub="${file#$ps_files/}"
    # Calculate SHA1 to identify file content uniquely
    checksum=$(shasum "$file" | cut -d' ' -f1)
    dest_checksum="${cache_dir}/${checksum:0:2}/${checksum:2:2}/${checksum:4}"
    ignored="${dest_checksum}.ignore"
    dest_stub="${ps_dir}/stubs/${stub}"

    show_step "$version" "Processing ${stub} (SHA: ${checksum})"

    if [ -f "${ignored}" ]; then
      touch "${ignored}"
      continue
    fi

    # Generate stub only if it doesn't exist in the cache
    if [ ! -f "$dest_checksum" ] || [ "$FORCE" = true ]; then
      mkdir -p "$(dirname "$dest_checksum")"
      # generate-stubs output is piped through sed to trim trailing whitespace
      ./vendor/bin/generate-stubs "$file" | sed 's/\s*$//g' > "$dest_checksum"

      # Check if stub is empty (contains only the PHP open tag/header)
      check=$(tail -n +2 "$dest_checksum")
      if [ -z "$check" ]; then
        rm "$dest_checksum"
        touch "$ignored"
        continue
      fi
    fi

    touch "$dest_checksum"
    mkdir -p "$(dirname "$dest_stub")"
    cp "$dest_checksum" "$dest_stub"
  done
}

# --- show_step ---
# Utility to print progress to the terminal without creating new lines,
# creating a smooth status update effect.
show_step () {
  local tag=$1
  local text=$2

  printf "\r%-${max_width}s" "[${tag}] ${text}"
}

# --- create_aliases ---
# Finds Core classes (e.g., CartCore) and uses AWK to generate
# alias classes (e.g., class Cart extends CartCore {}).
create_aliases () {
  local tag=$1
  local sub_dir=$2
  local output_name=$3

  if [ -d "${work_dir}/stubs/${sub_dir}" ]; then
    # Search for class names ending in Core, sort them, and pipe to the AWK generator
    grep -Erho '(abstract )?class \w+Core\b' "${work_dir}/stubs/${sub_dir}" \
      | awk '{print $NF,$0}' | sort | cut -d' ' -f2- | uniq \
      | awk -f "${scripts_dir}/create-alias.awk" > "${work_dir}/stubs/${output_name}"
  fi
}

# --- clean_cache ---
# Removes cached stubs that haven't been used (modified) in the last 30 days.
clean_cache () {
  local label=$1
  local cache_dir="${work_dir}/.cache"

  if [ -d "$cache_dir" ]; then
    show_step "$label" "Cleaning cache (limit: $CLEAN_CACHE_DAYS days)"
    if [ "$CLEAN_CACHE_DAYS" -eq 0 ]; then
      # If 0, delete everything not touched in the last minute
      find "$cache_dir" -type f -mmin +1 -delete
    else
      find "$cache_dir" -type f -mtime +"$CLEAN_CACHE_DAYS" -delete
    fi
    find "$cache_dir" -type d -empty -delete
  fi
}

# --- Main Execution Logic ---

if [ -n "$SPECIFIC_VERSION" ]; then
  tag="$SPECIFIC_VERSION"
else
  # Fetch the latest PrestaShop 8 version tag from GitHub API
  tag=$(curl -fsSL https://api.github.com/repos/PrestaShop/PrestaShop/git/matching-refs/tags \
    | jq -rc '.[] | select(.ref | test("\\d+\\.\\d+\\.\\d+$")) | .ref | match("\\d+\\.\\d+\\.\\d+(\\.\\d+)?") | .string' \
    | sort -V | grep '^8\.' | tail -1)
fi

if [ -n "$tag" ]; then
  # 1. Prepare variables for the current version
  version=$(echo "$tag" | awk -F. '{ print $1"."$2"."$3 }')
  branch="ps-${version}"
  ps_dir="${work_dir}/tmp/${tag}"
  ps_files="${ps_dir}/files"

  # 2. Check major version compatibility (only PrestaShop 8.x is supported)
  major=$(echo "$tag" | awk -F. '{ print $1 }')
  if [ "$major" -lt 8 ] || [ "$major" -gt 8 ]; then
    echo "[$tag] Skipped: PrestaShop version $tag is not supported. Only versions 8.x are supported."
    exit 0
  fi

  # 3. Ensure git is initialized
  if [ ! -d ".git" ]; then
    git init
  fi

  # 4. Check if the git tag already exists to avoid reprocessing
  exists=$(git tag -l | grep -wc "v$tag" || true)
  if [ "$exists" -eq 1 ] && [ "$FORCE" = false ]; then
    echo "[$tag] tag exist. Done!"
    exit 0
  fi

  show_step "$tag" "Starting"

  # 5. Manage git branches: switch to existing or create new one
  if git show-ref --verify --quiet refs/heads/$branch; then
    git switch $branch 1> /dev/null 2>&1
  else
    git switch -c $branch 1> /dev/null 2>&1
  fi

  # 5.1. Optional: Clean cache before processing if FORCE or CLEAN_CACHE_DAYS is 0
  # This ensures a truly fresh start if the user explicitly requested it.
  if [ "$CLEAN_CACHE_DAYS" -eq 0 ] || [ "$FORCE" = true ]; then
    clean_cache "$tag"
  fi

  # 6. Download PrestaShop source and generate stubs
  prestashop_dl "$tag" "$ps_dir"
  process "$tag" "$ps_dir" "$ps_files"

  # 7. Update the stubs directory in the repository
  show_step "$tag" "Moving files"
  rm -rf "${work_dir}/stubs"
  mv "${ps_dir}/stubs" "${work_dir}/stubs"

  # 8. Generate aliases
  show_step "$tag" "Create aliases"
  create_aliases "$tag" "classes" "class_stubs.php"
  create_aliases "$tag" "controllers" "controllers_stubs.php"

  # 9. Check for changes to commit
  changes=$(git status --porcelain --ignore-submodules)
  if [ -n "$changes" ]; then
    show_step "$tag" "Commit"

    git add "${work_dir}/stubs"
    git commit -S -m "chore(stubs): update to $tag" 1> /dev/null
  fi

  # 10. Create the release tag
  git tag -sf "v${tag}" -m "Release v${tag}"

  # 11. Delete tag files
  rm -rf "${ps_dir}"

  # 12. Clean old cache items (older than 30 days)
  clean_cache "$tag"

  show_step "$tag" "ALL Done!"
  echo
else
  echo "No version found"
  exit 1
fi
