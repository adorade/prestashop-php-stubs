<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Holds product upc code value
 */
class Upc
{
    /**
     * Valid upc regex pattern
     */
    public const VALID_PATTERN = '/^[0-9]{0,12}$/';
    /**
     * Maximum allowed symbols
     */
    public const MAX_LENGTH = 12;
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
