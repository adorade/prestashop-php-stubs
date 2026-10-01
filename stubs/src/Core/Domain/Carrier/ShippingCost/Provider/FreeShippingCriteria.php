<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider;

final class FreeShippingCriteria
{
    public function __construct(private readonly ?\PrestaShop\Decimal\DecimalNumber $freePrice, private readonly ?\PrestaShop\Decimal\DecimalNumber $freeWeight)
    {
    }
    public function getFreePrice(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    public function getFreeWeight(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    public function hasFreePrice(): bool
    {
    }
    public function hasFreeWeight(): bool
    {
    }
}
