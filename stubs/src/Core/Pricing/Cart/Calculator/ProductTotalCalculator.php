<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Cart\Calculator;

/**
 * First calculator in the cart pipeline: fetches cart products, computes each product's
 * price via the ProductCalculator, then sums all product totals into productTotal.
 *
 * @experimental
 */
class ProductTotalCalculator implements \PrestaShop\PrestaShop\Core\Pricing\Cart\Calculator\CartCalculatorInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Pricing\Cart\Provider\CartProductProviderInterface $cartProductProvider, protected readonly \PrestaShop\PrestaShop\Core\Pricing\Product\Calculator\ProductCalculatorInterface $productCalculator)
    {
    }
    public function compute(\PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface $cartPrice): void
    {
    }
}
