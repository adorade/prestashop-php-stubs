<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\ShippingCost\Calculator;

class HandlingCostCalculator implements \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Calculator\ShippingCostCalculatorInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\ShippingCostPriceInterface $context): void
    {
    }
}
