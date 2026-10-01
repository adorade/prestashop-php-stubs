<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product\Calculator;

/**
 * First calculator in the pipeline: fetches raw pricing data from the provider
 * and computes originalPrice (price + combination impact) and unitPrice (unit_price + combination impact).
 * Initializes finalPrice with the same value as originalPrice before discounts are applied.
 */
class BaseProductCalculator implements \PrestaShop\PrestaShop\Core\Pricing\Product\Calculator\ProductCalculatorInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Pricing\Product\Provider\ProductProviderInterface $productProvider)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface $productPrice): void
    {
    }
}
