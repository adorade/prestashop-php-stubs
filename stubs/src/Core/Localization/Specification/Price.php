<?php

namespace PrestaShop\PrestaShop\Core\Localization\Specification;

/**
 * Price number specification class
 * Regroups specific rules and data used when formatting a price in a given locale and a given numbering system
 * (latin, arab, ...).
 */
class Price extends \PrestaShop\PrestaShop\Core\Localization\Specification\Number
{
    /**
     * Currency display option: symbol notation.
     */
    public const CURRENCY_DISPLAY_SYMBOL = 'symbol';
    /**
     * Currency display option: ISO code notation.
     */
    public const CURRENCY_DISPLAY_CODE = 'code';
    /**
     * Price value placeholder without symbols
     */
    public const PATTERN_BASE_PLACEHOLDER = '#,##0.00';
    /**
     * Type of display for currency symbol
     * cf. self::CURRENCY_DISPLAY_SYMBOL and self::CURRENCY_DISPLAY_CODE constants.
     *
     * @var string
     */
    protected $currencyDisplay;
    /**
     * @var string The currency symbol
     *             eg : €
     */
    protected $currencySymbol;
    /**
     * @var string The currency code
     *             eg : EUR
     */
    protected $currencyCode;
    /**
     * Price specification constructor.
     *
     * @param string $positivePattern CLDR formatting pattern for positive amounts
     * @param string $negativePattern CLDR formatting pattern for negative amounts
     * @param NumberSymbolList[] $symbols List of available number symbols lists (NumberSymbolList objects)
     *                                    Each list is indexed by numbering system
     * @param int $maxFractionDigits Maximum number of digits after decimal separator
     * @param int $minFractionDigits Minimum number of digits after decimal separator
     * @param bool $groupingUsed Is digits grouping used ?
     * @param int $primaryGroupSize Size of primary digits group in the number
     * @param int $secondaryGroupSize Size of secondary digits group in the number
     * @param string $currencyDisplay Type of display for currency symbol
     * @param string $currencySymbol Currency symbol of this price (eg. : €)
     * @param string $currencyCode Currency code of this price (e.g.: EUR)
     *
     * @throws LocalizationException
     */
    public function __construct($positivePattern, $negativePattern, $symbols, $maxFractionDigits, $minFractionDigits, $groupingUsed, $primaryGroupSize, $secondaryGroupSize, $currencyDisplay, $currencySymbol, $currencyCode)
    {
    }
    /**
     * Get type of display for currency symbol.
     *
     * @return string
     */
    public function getCurrencyDisplay()
    {
    }
    /**
     * Get the currency symbol
     * e.g.: €.
     *
     * @return string
     */
    public function getCurrencySymbol()
    {
    }
    /**
     * Get the currency ISO code
     * e.g.: EUR.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
    }
    /**
     * Data (attributes) validation.
     *
     * @throws LocalizationException
     */
    protected function validateData()
    {
    }
    /**
     * To array function
     *
     * @return array
     */
    public function toArray(): array
    {
    }
}
