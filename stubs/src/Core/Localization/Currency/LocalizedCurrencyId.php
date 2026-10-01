<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency;

/**
 * Value-object representing an identifier for a currency, "translated" in a given locale (language + region).
 */
class LocalizedCurrencyId
{
    /**
     * @param string $currencyCode ISO 4217 currency code
     * @param string $localeCode IETF tag (e.g.: fr-FR, en-US...)
     */
    public function __construct($currencyCode, $localeCode)
    {
    }
    public function __toString()
    {
    }
    /**
     * @return string
     */
    public function getCurrencyCode()
    {
    }
    /**
     * @return string
     */
    public function getLocaleCode()
    {
    }
}
