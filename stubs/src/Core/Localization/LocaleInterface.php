<?php

namespace PrestaShop\PrestaShop\Core\Localization;

/**
 * Locale entity interface.
 *
 * Describes the behavior of locale classes
 */
interface LocaleInterface
{
    /**
     * Format a number according to locale rules.
     *
     * @param int|float|string $number The number to be formatted
     *
     * @return string The formatted number
     */
    public function formatNumber($number);
    /**
     * Format a number as a price.
     *
     * @param int|float|string $number Number to be formatted as a price
     * @param string $currencyCode Currency of the price
     *
     * @return string The formatted price
     */
    public function formatPrice($number, $currencyCode);
}
