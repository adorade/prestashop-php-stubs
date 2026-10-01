<?php

namespace PrestaShop\PrestaShop\Core\Pricing\ValueObject;

/**
 * Represents a tax rate percentage (e.g. 20 for 20% VAT).
 */
class TaxRate
{
    public function __construct(protected readonly \PrestaShop\Decimal\DecimalNumber $rate)
    {
    }
    public static function zero(): self
    {
    }
    public function getRate(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * Returns 1 + rate/100 (e.g. 1.2 for a 20% tax rate).
     */
    public function getMultiplier(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * Checks whether this tax rate is equal to another.
     */
    public function equals(self $other): bool
    {
    }
}
