<?php

namespace PrestaShop\PrestaShop\Core\Util;

/**
 * Utility class to convert arabic/persian digits to latin digits
 */
class ArabicToLatinDigitConverter
{
    public const ARABIC = 1;
    public const PERSIAN = 2;
    /**
     * Convert from arabic/persian digits to latin digits
     *
     * @param string $str
     *
     * @return string
     */
    public function convert(string $str): string
    {
    }
    /**
     * Convert from latin digits to arabic or persian digits
     *
     * @param string $str
     * @param int $lang
     *
     * @return string
     */
    public function reverseConvert(string $str, int $lang = self::ARABIC): string
    {
    }
}
