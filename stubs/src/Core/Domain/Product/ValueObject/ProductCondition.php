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
    public const OPEN_BOX = 'open_box';
    public const DAMAGED = 'damaged';
    public const NEW_WITH_DEFECTS = 'new_with_defects';
    /**
     * A list of available values
     */
    public const AVAILABLE_CONDITIONS = [self::NEW, self::USED, self::REFURBISHED, self::OPEN_BOX, self::DAMAGED, self::NEW_WITH_DEFECTS];
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
