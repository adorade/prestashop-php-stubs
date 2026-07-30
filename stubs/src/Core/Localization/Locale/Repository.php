<?php

namespace PrestaShop\PrestaShop\Core\Localization\Locale;

/**
 * Locale repository.
 *
 * Used to get locale instances.
 * This repository manages all dependencies needed to create a complete Localization/Locale instance
 */
class Repository implements \PrestaShop\PrestaShop\Core\Localization\Locale\RepositoryInterface
{
    /**
     * Max number of digits to use in the fraction part of a decimal number
     * This is a default value.
     */
    public const MAX_FRACTION_DIGITS = 3;
    /**
     * Repository used to retrieve low level CLDR locale objects.
     *
     * @var CldrLocaleRepository
     */
    protected $cldrLocaleRepository;
    /**
     * Repository used to retrieve Currency objects.
     *
     * @var CurrencyRepositoryInterface
     */
    protected $currencyRepository;
    /**
     * Rounding mode to use when formatting numbers
     * Possible values are listed in PrestaShop\Decimal\Operation\Rounding::ROUND_* constants.
     *
     * @var string
     */
    protected $roundingMode;
    /**
     * Numbering system to use when formatting numbers.
     * Default value: "latn".
     *
     * @see http://cldr.unicode.org/translation/numbering-systems
     *
     * @var string
     */
    protected $numberingSystem;
    /**
     * Currency display type
     * Default is "symbol". But sometimes you may want to display the currency code instead.
     * Possible values: PrestaShop\PrestaShop\Core\Localization\Specification\Price::CURRENCY_DISPLAY_*.
     *
     * @var string
     */
    protected $currencyDisplayType;
    /**
     * Already instantiated Locale objects.
     *
     * @var Locale[]
     */
    protected $locales;
    /**
     * Should we group digits in a number's integer part ?
     *
     * @var bool
     */
    protected $numberGroupingUsed;
    /**
     * Max number of digits to display in a number's decimal part.
     *
     * @var int
     */
    protected $maxFractionDigits;
    /**
     * @var SpecificationFactory
     */
    protected $specificationFactory;
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $cldrLocaleRepository, \PrestaShop\PrestaShop\Core\Localization\Currency\RepositoryInterface $currencyRepository, $roundingMode = \PrestaShop\Decimal\Operation\Rounding::ROUND_HALF_UP, $numberingSystem = \PrestaShop\PrestaShop\Core\Localization\Locale::NUMBERING_SYSTEM_LATIN, $currencyDisplayType = \PrestaShop\PrestaShop\Core\Localization\Specification\Price::CURRENCY_DISPLAY_SYMBOL, $groupingUsed = true, $maxFractionDigits = self::MAX_FRACTION_DIGITS)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLocale($localeCode)
    {
    }
    /**
     * Get the Number specification for a given locale.
     *
     * @param string $localeCode
     *                           The locale code (simplified IETF tag syntax)
     *                           Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     *                           eg: fr-FR, en-US
     *
     * @return NumberSpecification
     *                             A Number specification
     *
     * @throws LocalizationException
     */
    protected function getNumberSpecification($localeCode)
    {
    }
    /**
     * Get all the Price specifications for a given locale.
     * Each installed currency has its own Price specification.
     *
     * @param string $localeCode
     *                           The locale code (simplified IETF tag syntax)
     *                           Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     *                           eg: fr-FR, en-US
     *
     * @return PriceSpecificationMap
     *                               All installed currencies' Price specifications
     *
     * @throws LocalizationException
     */
    protected function getPriceSpecifications($localeCode)
    {
    }
    /**
     * @return bool
     */
    public function isNumberGroupingUsed()
    {
    }
    /**
     * @return string
     */
    public function getCurrencyDisplayType()
    {
    }
}
