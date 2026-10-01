<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\ShippingCost\Calculator;

class CarrierDataCalculator implements \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Calculator\ShippingCostCalculatorInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\CarrierDataProviderInterface $carrierDataProvider)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\ShippingCostPriceInterface $context): void
    {
    }
}
