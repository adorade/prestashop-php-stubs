<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Calculator;

class ShippingCostCalculator implements \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Calculator\ShippingCostCalculatorInterface
{
    public function __construct(private readonly iterable $calculators)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\ShippingCostPriceInterface $context): void
    {
    }
}
