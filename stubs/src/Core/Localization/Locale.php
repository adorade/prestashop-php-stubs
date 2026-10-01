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
    public const NUMBERING_SYSTEM_LATIN = \PrestaShop\PrestaShop\Core\Localization\LocaleInterface::NUMBERING_SYSTEM_LATIN;
    /**
     * The locale code (simplified IETF tag syntax)
     * Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     * eg: fr-FR, en-US.
     *
     * @var string
     */
    protected string $code;
    /**
     * Number formatter.
     * Used to format raw numbers in this locale context.
     *
     * @var \PrestaShop\PrestaShop\Core\Localization\Number\Formatter
     */
    protected \PrestaShop\PrestaShop\Core\Localization\Number\Formatter $numberFormatter;
    /**
     * Number formatting specification.
     */
    protected \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface $numberSpecification;
    /**
     * Price formatting specifications collection (one spec per currency).
     *
     * @var \PrestaShop\PrestaShop\Core\Localization\Specification\NumberCollection
     */
    protected $priceSpecifications;
    /**
     * Locale constructor.
     *
     * @param string $localeCode
     *                           The locale code (simplified IETF tag syntax)
     *                           Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     *                           eg: fr-FR, en-US
     * @param \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface $numberSpecification
     *                                             Number specification used when formatting a number
     * @param \PrestaShop\PrestaShop\Core\Localization\Specification\NumberCollection $priceSpecifications
     *                                              Collection of Price specifications (one per installed currency)
     * @param \PrestaShop\PrestaShop\Core\Localization\Number\Formatter $formatter
     *                                   This number formatter will use stored number / price specs
     */
    public function __construct(string $localeCode, \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface $numberSpecification, \PrestaShop\PrestaShop\Core\Localization\Specification\NumberCollection $priceSpecifications, \PrestaShop\PrestaShop\Core\Localization\Number\Formatter $formatter)
    {
    }
    /**
     * Get this locale's code (simplified IETF tag syntax)
     * Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     * eg: fr-FR, en-US.
     *
     * @return string
     */
    public function getCode(): string
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
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    public function formatNumber(int|float|string $number): string
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
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    public function formatPrice(int|float|string $number, string $currencyCode): string
    {
    }
    /**
     * Get price specification
     *
     * @param string $currencyCode Currency of the price
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface
     */
    public function getPriceSpecification(string $currencyCode): \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface
    {
    }
    /**
     * Get number specification
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface
     */
    public function getNumberSpecification(): \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface
    {
    }
}
