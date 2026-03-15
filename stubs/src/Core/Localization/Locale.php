<?php

namespace PrestaShop\PrestaShop\Core\Localization;

/**
 * Locale entity.
 *
 * This is the main CLDR entry point. For example, Locale is used to format numbers, prices, percentages.
 * To build a Locale instance, use the Locale repository.
 */
class Locale implements \PrestaShop\PrestaShop\Core\Localization\LocaleInterface
{
    /**
     * Latin numbering system is the "occidental" numbering system. Number digits are 0123456789.
     * This is the default numbering system in PrestaShop, even for arabian or asian languages, until we
     * provide a way to configure this in admin.
     */
    public const NUMBERING_SYSTEM_LATIN = 'latn';
    /**
     * The locale code (simplified IETF tag syntax)
     * Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     * eg: fr-FR, en-US.
     *
     * @var string
     */
    protected $code;
    /**
     * Number formatter.
     * Used to format raw numbers in this locale context.
     *
     * @var NumberFormatter
     */
    protected $numberFormatter;
    /**
     * Number formatting specification.
     *
     * @var NumberSpecification
     */
    protected $numberSpecification;
    /**
     * Price formatting specifications collection (one spec per currency).
     *
     * @var PriceSpecificationMap
     */
    protected $priceSpecifications;
    /**
     * Locale constructor.
     *
     * @param string $localeCode
     *                           The locale code (simplified IETF tag syntax)
     *                           Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     *                           eg: fr-FR, en-US
     * @param NumberSpecification $numberSpecification
     *                                                 Number specification used when formatting a number
     * @param PriceSpecificationMap $priceSpecifications
     *                                                   Collection of Price specifications (one per installed currency)
     * @param NumberFormatter $formatter
     *                                   This number formatter will use stored number / price specs
     */
    public function __construct($localeCode, \PrestaShop\PrestaShop\Core\Localization\Specification\Number $numberSpecification, \PrestaShop\PrestaShop\Core\Localization\Specification\NumberCollection $priceSpecifications, \PrestaShop\PrestaShop\Core\Localization\Number\Formatter $formatter)
    {
    }
    /**
     * Get this locale's code (simplified IETF tag syntax)
     * Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     * eg: fr-FR, en-US.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Format a number according to locale rules.
     *
     * @param int|float|string $number
     *                                 The number to be formatted
     *
     * @return string
     *                The formatted number
     *
     * @throws Exception\LocalizationException
     */
    public function formatNumber($number)
    {
    }
    /**
     * Format a number as a price.
     *
     * @param int|float|string $number
     *                                 Number to be formatted as a price
     * @param string $currencyCode
     *                             Currency of the price
     *
     * @return string The formatted price
     *
     * @throws Exception\LocalizationException
     */
    public function formatPrice($number, $currencyCode)
    {
    }
    /**
     * Get price specification
     *
     * @param string $currencyCode Currency of the price
     *
     * @return NumberSpecificationInterface
     */
    public function getPriceSpecification($currencyCode)
    {
    }
    /**
     * Get number specification
     *
     * @return NumberSpecification
     */
    public function getNumberSpecification()
    {
    }
}
