<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product\Calculator;

/**
 * A single step in the product pricing pipeline. Each implementation mutates the
 * ProductPrice DTO in place and returns early when not relevant.
 */
interface ProductCalculatorInterface
{
    public function compute(\PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface $productPrice): void;
}
