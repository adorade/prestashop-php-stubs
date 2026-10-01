<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Cart\Calculator;

/**
 * Main entry point for computing a cart price. Implements CartCalculatorInterface
 * like any other calculator step, but internally delegates to a priority-sorted pipeline
 * of sub-calculators. This is an implementation detail — callers simply call compute().
 *
 * @experimental
 */
class CartCalculator implements \PrestaShop\PrestaShop\Core\Pricing\Cart\Calculator\CartCalculatorInterface
{
    /**
     * @param iterable<CartCalculatorInterface> $calculators Tagged iterator, priority-sorted
     */
    public function __construct(protected readonly iterable $calculators)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface $cartPrice): void
    {
    }
}
