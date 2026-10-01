<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

class Gtin
{
    /**
     * Valid gtin regex pattern
     */
    public const VALID_PATTERN = '/^[0-9]{0,14}$/';
    /**
     * Maximum allowed symbols
     */
    public const MAX_LENGTH = 14;
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
