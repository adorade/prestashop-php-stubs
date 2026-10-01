<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR;

/**
 * The LocaleData class is the exact representation of Locale's data structure inside CLDR xml data files.
 *
 * This class is only used internally, it is mutable and overridable until fully built. It can then be used as
 * an intermediary data bag to build a real CLDR Locale (immutable) object.
 */
class LocaleData
{
    /**
     * The locale code for this data (either language code or IETF tag).
     * e.G.: 'fr', 'fr-FR'...
     *
     * @var string|null
     */
    protected $localeCode;
    /**
     * List of available numbering systems
     * Array of strings (codes).
     *
     * @var string[]|null
     */
    protected $numberingSystems;
    /**
     * Default numbering system.
     *
     * @var string|null
     */
    protected $defaultNumberingSystem;
    /**
     * Used to suppress groupings below a certain value.
     *
     * 1 -> grouping starts at 4 figures integers (1,000 and more)
     * 2 -> grouping starts at 5 figures integers (10,000 and more)
     *
     * @var int|null
     */
    protected $minimumGroupingDigits;
    /**
     * Collection of all available symbols list (by numbering system).
     *
     * @var NumberSymbolsData[]|null
     */
    protected $numberSymbols;
    /**
     * Collection of all available decimal patterns (by numbering system)
     * Array of strings (patterns).
     *
     * @var string[]|null
     */
    protected $decimalPatterns;
    /**
     * Collection of all available percent patterns (by numbering system)
     * Array of strings (patterns).
     *
     * @var string[]|null
     */
    protected $percentPatterns;
    /**
     * Collection of all available currency patterns (by numbering system)
     * Array of strings (patterns).
     *
     * @var string[]|null
     */
    protected $currencyPatterns;
    /**
     * All currencies, by ISO code.
     *
     * @var CurrencyData[]|null
     */
    protected $currencies;
    /**
     * Override this object's data with another LocaleData object.
     *
     * @param LocaleData $localeData Locale data to use for the override
     *
     * @return $this Fluent interface
     */
    public function overrideWith(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleData $localeData)
    {
    }
    /**
     * @return string|null
     */
    public function getLocaleCode()
    {
    }
    /**
     * @param string $localeCode
     *
     * @return LocaleData
     */
    public function setLocaleCode($localeCode)
    {
    }
    /**
     * @return string[]|null
     */
    public function getNumberingSystems()
    {
    }
    /**
     * @param string[] $numberingSystems
     *
     * @return LocaleData
     */
    public function setNumberingSystems($numberingSystems)
    {
    }
    /**
     * @return string|null
     */
    public function getDefaultNumberingSystem()
    {
    }
    /**
     * @param string $defaultNumberingSystem
     *
     * @return LocaleData
     */
    public function setDefaultNumberingSystem($defaultNumberingSystem)
    {
    }
    /**
     * @return int|null
     */
    public function getMinimumGroupingDigits()
    {
    }
    /**
     * @param int $minimumGroupingDigits
     *
     * @return LocaleData
     */
    public function setMinimumGroupingDigits($minimumGroupingDigits)
    {
    }
    /**
     * @return NumberSymbolsData[]|null
     */
    public function getNumberSymbols()
    {
    }
    /**
     * @param NumberSymbolsData[] $numberSymbols
     *
     * @return LocaleData
     */
    public function setNumberSymbols($numberSymbols)
    {
    }
    /**
     * @return string[]|null
     */
    public function getDecimalPatterns()
    {
    }
    /**
     * @param string[] $decimalPatterns
     *
     * @return LocaleData
     */
    public function setDecimalPatterns($decimalPatterns)
    {
    }
    /**
     * @return string[]|null
     */
    public function getPercentPatterns()
    {
    }
    /**
     * @param string[] $percentPatterns
     *
     * @return LocaleData
     */
    public function setPercentPatterns($percentPatterns)
    {
    }
    /**
     * @return string[]|null
     */
    public function getCurrencyPatterns()
    {
    }
    /**
     * @param string[] $currencyPatterns
     *
     * @return LocaleData
     */
    public function setCurrencyPatterns($currencyPatterns)
    {
    }
    /**
     * @return CurrencyData[]|null
     */
    public function getCurrencies()
    {
    }
    /**
     * @param string $currencyIsoCode
     *
     * @return CurrencyData|null
     */
    public function getCurrencyByIsoCode($currencyIsoCode)
    {
    }
    /**
     * @param CurrencyData[] $currencies
     *
     * @return LocaleData
     */
    public function setCurrencies($currencies)
    {
    }
}
