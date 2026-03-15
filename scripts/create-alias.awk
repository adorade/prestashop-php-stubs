#! /usr/bin/awk -f
#
# Generates PHP class aliases for PrestaShop Core classes.
# Reads class definitions and creates extending classes (e.g., Cart extends CartCore).
# Usage: awk -f create-alias.awk input.txt > output.php
#

BEGIN {
  print "<?php"
  print ""
}

{
  if ($3) {
    print substr($0, 0, length($0) - 4) " extends " $3 " {};"
  } else {
    print substr($0, 0, length($0) - 4) " extends " $2 " {};"
  }
}
