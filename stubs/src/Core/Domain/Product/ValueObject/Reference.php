<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

class Reference
{
    /**
     * Valid reference regex pattern
     */
    public const VALID_PATTERN = '/^[^<>;={}]*$/u';
    /**
     * Maximum allowed symbols
     */
    public const MAX_LENGTH = 64;
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
