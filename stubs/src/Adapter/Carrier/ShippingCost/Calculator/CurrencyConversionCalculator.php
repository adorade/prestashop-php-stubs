<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\ShippingCost\Calculator;

class CurrencyConversionCalculator implements \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Calculator\ShippingCostCalculatorInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Tools $tools, private readonly \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\ShippingCostPriceInterface $context): void
    {
    }
}
