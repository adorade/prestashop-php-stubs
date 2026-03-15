<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Holds product condition value
 */
class ProductCondition
{
    public const NEW = 'new';
    public const USED = 'used';
    public const REFURBISHED = 'refurbished';
    /**
     * A list of available values
     */
    public const AVAILABLE_CONDITIONS = [self::NEW, self::USED, self::REFURBISHED];
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
