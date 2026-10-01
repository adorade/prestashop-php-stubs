<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject;

/**
 * Out of range behavior value for Carriers
 */
class OutOfRangeBehavior
{
    /**
     * Use the highest range if we are out of range on order
     */
    public const USE_HIGHEST_RANGE = 0;
    /**
     * Disable carrier if we are out of range on order
     */
    public const DISABLED = 1;
    /**
     * A list of available values
     */
    public const AVAILABLE_VALUES = [self::USE_HIGHEST_RANGE, self::DISABLED];
    /**
     * @param int $value
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierConstraintException
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
