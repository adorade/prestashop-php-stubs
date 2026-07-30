<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject;

/**
 * Percentage discount
 */
class PercentageDiscount
{
    /**
     * @param float $percentage
     * @param bool $appliesToDiscountedProducts
     */
    public function __construct(float $percentage, bool $appliesToDiscountedProducts)
    {
    }
    /**
     * @return float
     */
    public function getPercentage(): float
    {
    }
    /**
     * @return bool
     */
    public function appliesToDiscountedProducts(): bool
    {
    }
}
