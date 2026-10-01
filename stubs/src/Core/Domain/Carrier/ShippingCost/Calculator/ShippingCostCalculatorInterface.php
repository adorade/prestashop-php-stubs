<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Calculator;

interface ShippingCostCalculatorInterface
{
    public function compute(\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\ShippingCostPriceInterface $context): void;
}
