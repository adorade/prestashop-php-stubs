<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product\Calculator;

/**
 * Main entry point for computing a product price. Implements ProductCalculatorInterface
 * like any other calculator step, but internally delegates to a priority-sorted pipeline
 * of sub-calculators. This is an implementation detail — callers simply call compute().
 */
class ProductCalculator implements \PrestaShop\PrestaShop\Core\Pricing\Product\Calculator\ProductCalculatorInterface
{
    /**
     * @param iterable<ProductCalculatorInterface> $calculators Tagged iterator, priority-sorted
     */
    public function __construct(protected readonly iterable $calculators)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface $productPrice): void
    {
    }
}
