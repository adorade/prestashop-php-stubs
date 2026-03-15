<?php

namespace PrestaShopBundle\Utils;

/**
 * Converts strings into floats.
 */
class FloatParser
{
    public function __construct(\PrestaShop\PrestaShop\Core\Util\ArabicToLatinDigitConverter $arabicToLatinDigitConverter = null)
    {
    }
    /**
     * Constructs a float value from an arbitrarily-formatted string.
     *
     * This method supports any thousand and decimal separator.
     * If the string is ambiguous (e.g. 123,456) the interpreter will interpret the last group of numbers
     * as the decimal part.
     *
     * In order to prevent unexpected behavior, make sure that your value has a decimal part.
     *
     * Examples:
     * - '123,456' --> 123.456
     * - '123,456,00' --> 123456.00
     * - '12,345,678 --> 12345.678
     *
     * @param string $value
     *
     * @throws \InvalidArgumentException if the provided value is not a string
     *                                   or if it cannot be interpreted as a number
     *
     * @return float
     */
    public function fromString($value)
    {
    }
}
