<?php

namespace PrestaShop\PrestaShop\Core\Localization\Specification;

/**
 * Number specification factory.
 * Builds Number, Price or Percentage specifications objects.
 *
 * Uses a CLDR Locale instance to extract relevant data needed to build a specification object
 */
class Factory
{
    /**
     * Build a Number specification from a CLDR Locale object.
     *
     * @param CldrLocaleInterface $cldrLocale
     *                                        This CldrLocale object is a low level data object extracted from CLDR data source
     * @param int $maxFractionDigits
     *                               Max number of digits to display in a number's decimal part
     * @param bool $numberGroupingUsed
     *                                 Should we group digits in a number's integer part ?
     *
     * @return NumberSpecification
     *
     * @throws LocalizationException
     */
    public function buildNumberSpecification(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleInterface $cldrLocale, $maxFractionDigits, $numberGroupingUsed)
    {
    }
    /**
     * Build a Price specification from a CLDR Locale object and a Currency object.
     *
     * @param string $localeCode The concerned locale
     * @param CldrLocaleInterface $cldrLocale his CldrLocale object is a low level data object extracted from CLDR data source
     *                                        It contains data about the concerned locale
     * @param Currency $currency This Currency object brings missing specification to format a number as a price
     * @param bool $numberGroupingUsed Should we group digits when formatting prices ?
     * @param string $currencyDisplayType Type of display for currency symbol (symbol or ISO code)
     * @param int|null $maxFractionDigits The decimal precision of the price
     *
     * @return PriceSpecification
     *
     * @throws LocalizationException
     */
    public function buildPriceSpecification($localeCode, \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleInterface $cldrLocale, \PrestaShop\PrestaShop\Core\Localization\Currency $currency, $numberGroupingUsed, $currencyDisplayType, ?int $maxFractionDigits = null)
    {
    }
    /**
     * Extract the positive pattern from a CLDR formatting pattern
     * Works with any formatting pattern (number, price, percentage).
     *
     * @param string $pattern
     *                        The CLDR pattern
     *
     * @return string
     *                The extracted positive pattern
     */
    protected function getPositivePattern($pattern)
    {
    }
    /**
     * Extract the negative pattern from a CLDR formatting pattern
     * Works with any formatting pattern (number, price, percentage).
     *
     * @param string $pattern
     *                        The CLDR pattern
     *
     * @return string
     *                The extracted negative pattern
     */
    protected function getNegativePattern($pattern)
    {
    }
    /**
     * Convert a list of CLDR number symbols data into a list of NumberSymbolList objects.
     *
     * @param NumberSymbolsData[] $allNumberSymbolsData
     *                                                  All the CLDR number symbols data indexed by numbering system
     *
     * @return NumberSymbolList[]
     *
     * @throws LocalizationException
     *                               If passed data is invalid
     */
    protected function computeNumberSymbolLists($allNumberSymbolsData)
    {
    }
    /**
     * Get a NumberSymbolList object from a CLDR NumberSymbolsData object.
     *
     * @param NumberSymbolsData $symbolsData Data that will be used to build the NumberSymbolList object
     *
     * @return NumberSymbolList An immutable NumberSymbolList object
     *
     * @throws LocalizationException If passed data is invalid
     */
    protected function getNumberSymbolList(\PrestaShop\PrestaShop\Core\Localization\CLDR\NumberSymbolsData $symbolsData)
    {
    }
    /**
     * Extract the min number of fraction digits from a number pattern (decimal, currency, percentage).
     *
     * @param string $pattern
     *                        The formatting pattern to use for extraction
     *
     * @return int
     *             The min number of fraction digits to display in the final number
     */
    protected function getMinFractionDigits($pattern)
    {
    }
    /**
     * Extract the max number of fraction digits from a number pattern (decimal, currency, percentage).
     *
     * @param string $pattern The formatting pattern to use for extraction (eg 0.00##)
     *
     * @return int The max number of fraction digits to display in the final number
     */
    protected function getMaxFractionDigits($pattern)
    {
    }
    /**
     * Get the primary digits group size from a number formatting pattern.
     *
     * @param string $pattern
     *                        The CLDR number formatting pattern (e.g.: #,##0.###)
     *
     * @return int
     *             The primary group size of the passed pattern
     */
    protected function getPrimaryGroupSize($pattern)
    {
    }
    /**
     * Get the secondary digits group size from a number formatting pattern
     * e.g.: with    #,##0.### => No secondary group. Will return primary group size.
     * e.g.: with #,##,##0.### => Secondary group size is 2, primary group size is 3.
     *
     * @param string $pattern The CLDR number formatting pattern
     *
     * @return int The secondary group size of the passed pattern
     */
    protected function getSecondaryGroupSize($pattern)
    {
    }
    protected function getPatternGroups($pattern)
    {
    }
}
