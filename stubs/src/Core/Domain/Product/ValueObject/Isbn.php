<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Holds product ISBN code value
 */
class Isbn
{
    /**
     * Valid ISBN regex pattern
     * Source : https://www.oreilly.com/library/view/regular-expressions-cookbook/9781449327453/ch04s13.html
     */
    public const VALID_PATTERN = '/' . '^' . '(?:ISBN(?:-1[03])?:? )?' . '(?=[0-9X]{10}$' . '|' . '(?=(?:[0-9]+[- ]){3})' . '[- 0-9X]{13}$' . '|' . '97[89][0-9]{10}$' . '|' . '(?=(?:[0-9]+[- ]){4})' . '[- 0-9]{17}$' . ')' . '(?:97[89][- ]?)?' . '[0-9]{1,5}[- ]?' . '[0-9]+[- ]?[0-9]+[- ]?' . '[0-9X]' . '$' . '/i';
    // Case insensitive.
    /**
     * Maximum allowed symbols
     */
    public const MAX_LENGTH = 32;
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
