# PrestaShop PHP Stubs

This package provides stub declarations for [PrestaShop](https://www.prestashop-project.org)
functions, classes and interfaces.
These stubs can help plugin and theme developers leverage IDE completion and static analysis tools like
[PHPStan](http://phpstan.org).

The stubs are generated directly from the source using [php-stubs/generator](https://github.com/php-stubs/generator).

## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev adorade/prestashop-php-stubs
```

## Purpose
Automates the generation of PHP stub files for **PrestaShop 8+** versions by downloading releases, cleaning unnecessary files, generating stubs, and committing them to version-specific Git branches.

## Key Functions

**prestashop_dl**: Downloads and unpacks PrestaShop release ZIP files from GitHub for a specified version.

**clean_prestashop**: Removes non-essential files (tools, var, non-English language files, documentation, examples, fonts, and non-PHP files) to reduce the codebase to only what's needed for stub generation.

**process**: Generates PHP stubs using the `generate-stubs` command with caching based on file checksums to avoid regenerating stubs for unchanged files.

**Main workflow**:
1. Fetches all PrestaShop version tags from GitHub API
2. Filters for PrestaShop 8+ versions
3. For each version: switches to corresponding branch, downloads/processes files, generates stubs
4. Creates class aliases for Core classes in `class_stubs.php` and controllers in `controllers_stubs.php`
5. Commits changes and tags the version if there are modifications

## Technical Details
- Uses checksum-based caching in `.cache/` to avoid redundant stub generation
- Organizes cache by checksum prefix (first 4 characters split into 2-char directories)
- Filters empty stubs and marks them as ignored
- Automatically removes cache items that haven't been accessed in 30 days
- Sorts versions naturally and processes them sequentially

## Running the script manually

To generate the stubs, you need to execute the `scripts/create-stub.sh` script.
```bash
./scripts/create-stub.sh
# or specific version
./scripts/create-stub.sh --version 8.0.0
# or change cache cleanup period
./scripts/create-stub.sh --clean-cache 15
```

## Usage in PHPStan

Include stubs in PHPStan configuration file.

```yaml
parameters:
  scanDirectories:
    - vendor/adorade/prestashop-php-stubs/stubs/
```

## Usage with VSCode PHP Intelephense extension

```json
"intelephense.environment.includePaths": [
  "vendor/adorade/prestashop-php-stubs/stubs",
]
```
