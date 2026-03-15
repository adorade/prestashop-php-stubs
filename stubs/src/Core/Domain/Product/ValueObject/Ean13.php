<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Holds product Ean13 code value
 */
class Ean13
{
    /**
     * Valid ean regex pattern
     */
    public const VALID_PATTERN = '/^[0-9]{0,13}$/';
    /**
     * Maximum allowed symbols
     */
    public const MAX_LENGTH = 13;
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
