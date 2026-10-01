<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject;

/**
 * Shipping method value for Carriers
 */
class ShippingMethod
{
    /**
     * Use weight to calculate shipping cost
     */
    public const BY_WEIGHT = 1;
    /**
     * Use price to calculate shipping cost
     */
    public const BY_PRICE = 2;
    /**
     * A list of available values
     */
    public const AVAILABLE_VALUES = [self::BY_WEIGHT, self::BY_PRICE];
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
