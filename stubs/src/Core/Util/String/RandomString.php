<?php

namespace PrestaShop\PrestaShop\Core\Util\String;

class RandomString
{
    public static function generate(int $length = 32): string
    {
    }
    /**
     * Generates a random string from the given set of characters.
     * ex: generateFromCharacters('ABCDEF0123456789', 10) to generate a random hexadecimal string of length 10
     *
     * @param string $characters Characters to use for generating the string
     * @param int $length Length of the generated string
     *
     * @return string Generated random string
     */
    public static function generateFromCharacters(string $characters, int $length): string
    {
    }
}
