<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product\Calculator;

/**
 * Last calculator in the pipeline: rounds the finalPrice only.
 * originalPrice, unitPrice and discountPrice keep their full precision values.
 * This is the only place where rounding occurs.
 */
class RoundingCalculator implements \PrestaShop\PrestaShop\Core\Pricing\Product\Calculator\ProductCalculatorInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Pricing\Rounding\RoundingServiceInterface $roundingService)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface $productPrice): void
    {
    }
    protected function roundPrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePriceInterface $price): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\ImmutableTaxablePrice
    {
    }
}
