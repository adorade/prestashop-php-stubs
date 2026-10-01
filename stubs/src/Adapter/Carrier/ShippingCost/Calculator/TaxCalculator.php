<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\ShippingCost\Calculator;

class TaxCalculator implements \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Calculator\ShippingCostCalculatorInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration, private readonly \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\ShippingTaxRateProviderInterface $taxRateProvider, private readonly \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository, private readonly \PrestaShop\PrestaShop\Core\Pricing\Rounding\RoundingServiceInterface $roundingService)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\ShippingCostPriceInterface $context): void
    {
    }
}
