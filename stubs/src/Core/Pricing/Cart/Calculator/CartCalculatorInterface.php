<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Cart\Calculator;

/**
 * A single step in the cart pricing pipeline. Each implementation mutates the
 * CartPrice DTO in place and returns early when not relevant.
 *
 * @experimental
 */
interface CartCalculatorInterface
{
    public function compute(\PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface $cartPrice): void;
}
