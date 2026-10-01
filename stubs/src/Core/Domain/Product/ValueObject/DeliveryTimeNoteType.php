<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Holds value of additional delivery time notes type
 */
class DeliveryTimeNoteType
{
    /**
     * Represents case when additional delivery time note is not used
     */
    public const TYPE_NONE = 0;
    /**
     * Represents case when additional delivery time notes should be taken from default settings
     */
    public const TYPE_DEFAULT = 1;
    /**
     * Represents case when specific additional delivery time notes should be used
     */
    public const TYPE_SPECIFIC = 2;
    /**
     * A list of allowed type values
     */
    public const ALLOWED_TYPES = ['none' => self::TYPE_NONE, 'default' => self::TYPE_DEFAULT, 'specific' => self::TYPE_SPECIFIC];
    /**
     * @param int $value
     */
    public function __construct(int $value)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
