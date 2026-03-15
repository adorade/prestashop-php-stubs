<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * Format a price depending on locale and currency.
 */
class PriceFormatter
{
    /**
     * @param float $price
     * @param int|null $currency
     *
     * @return float
     */
    public function convertAmount($price, $currency = null)
    {
    }
    /**
     * @param float $price
     * @param int|Currency|array|null $currency
     *
     * @return string
     */
    public function format($price, $currency = null)
    {
    }
    /**
     * @param float $price
     *
     * @return string
     */
    public function convertAndFormat($price)
    {
    }
}
