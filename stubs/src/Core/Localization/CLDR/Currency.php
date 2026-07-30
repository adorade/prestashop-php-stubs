<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR;

/**
 * CLDR Currency entity. This is an immutable data object.
 *
 * This class represents the immutable object of CLDR data for a specific currency, translated in a given language.
 * It is the only data object visible and handleable by "outside" code (meaning non-CLDR code).
 * CLDR Locale objects aggregate multiple CLDR Currency instances (available currencies), and return this class when
 * asked for a given currency.
 */
final class Currency implements \PrestaShop\PrestaShop\Core\Localization\CLDR\CurrencyInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\CurrencyData $currencyData)
    {
    }
    /**
     * Get the ISO code of this currency.
     *
     * @return string
     *                The currency's ISO 4217 code
     */
    public function getIsoCode()
    {
    }
    /**
     * Get the numeric ISO code of this currency.
     *
     * @return string The currency's ISO 4217 numeric code
     */
    public function getNumericIsoCode()
    {
    }
    /**
     * Get the number of decimal digits to display when formatting a price with this currency.
     *
     * @return int The number of decimal digits to display
     */
    public function getDecimalDigits()
    {
    }
    /**
     * Get the display name for the passed count context.
     *
     * @param string $countContext
     *                             The count context
     *                             "default" = talking about the currency (e.g.: "used currency is Euro")
     *                             "one"     = talking about one unit of this currency (e.g.: "one euro")
     *                             "other"   = talking about several units of this currency (e.g.: "ten euros")
     *
     * @return string|null The wanted display name
     *
     * @throws LocalizationException When an invalid display name is passed
     */
    public function getDisplayName($countContext = \PrestaShop\PrestaShop\Core\Localization\CLDR\CurrencyInterface::DISPLAY_NAME_COUNT_DEFAULT)
    {
    }
    /**
     * Get the symbol of this currency. Narrow symbol is returned by default.
     *
     * @param string $type Possible value: "default" ("$") and "narrow" ("US$")
     *
     * @return string|null The currency's symbol
     *
     * @throws LocalizationException When an invalid symbol type is passed
     */
    public function getSymbol($type = \PrestaShop\PrestaShop\Core\Localization\CLDR\CurrencyInterface::SYMBOL_TYPE_NARROW)
    {
    }
}
