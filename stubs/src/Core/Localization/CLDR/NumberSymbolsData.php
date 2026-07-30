<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR;

/**
 * Number's symbols data object. Regroups all symbols used when formatting a number
 * (decimal separator, thousands separator, etc.).
 */
class NumberSymbolsData
{
    /**
     * Decimal separator character.
     *
     * Separates the integer and fractional part of the number.
     *
     * @var string
     */
    protected $decimal;
    /**
     * Digits group separator character.
     *
     * separates clusters of integer digits to make large numbers more legible; commonly used for thousands(grouping
     * size 3, e.g. "100,000,000") or in some locales, ten-thousands (grouping size 4, e.g. "1,0000,0000").
     *
     * @var string
     */
    protected $group;
    /**
     * List elements separator character.
     *
     * Symbol used to separate numbers in a list intended to represent structured data such as an array.
     *
     * @var string
     */
    protected $list;
    /**
     * Percent sign character.
     *
     * Used to indicate a percentage (1/100th) amount.
     *
     * @var string
     */
    protected $percentSign;
    /**
     * Minus sign character.
     *
     * Symbol used to denote negative value.
     *
     * @var string
     */
    protected $minusSign;
    /**
     * Plus sign character.
     *
     * Symbol used to denote positive value.
     * It can be used to produce modified patterns, so that 3.12 is formatted as "+3.12", for example.
     *
     * @var string
     */
    protected $plusSign;
    /**
     * Exponential character.
     *
     * Symbol separating the mantissa and exponent values.
     *
     * @var string
     */
    protected $exponential;
    /**
     * Superscripting exponent character.
     *
     * Used in numbers to show a format like "1.23 × 10^4"
     * (exponential character is a shortcut for "× 10^n" notation)
     *
     * @var string
     */
    protected $superscriptingExponent;
    /**
     * Permille sign character.
     *
     * Used to define them as a per-mille (1/1000th) amount.
     *
     * @var string
     */
    protected $perMille;
    /**
     * The infinity sign. Corresponds to the IEEE infinity bit pattern.
     *
     * @var string
     */
    protected $infinity;
    /**
     * The NaN (Not A Number) sign. Corresponds to the IEEE NaN bit pattern.
     *
     * @var string
     */
    protected $nan;
    /**
     * Separator used in date-time formatting.
     *
     * eg.: ":" => 20:00:00 (latn)
     * eg.: "," => 20,00,00 (arab)
     *
     * @var string
     */
    protected $timeSeparator;
    /**
     * Will be set when decimal separator is different when formatting a price.
     *
     * @var string
     */
    protected $currencyDecimal;
    /**
     * Will be set when digits grouping is different when formatting a price.
     *
     * @var string
     */
    protected $currencyGroup;
    /**
     * Override this object's symbols with another NumberSymbolsData object.
     *
     * @param NumberSymbolsData $symbolsData Symbols to use for the override
     *
     * @return $this Fluent interface
     */
    public function overrideWith(\PrestaShop\PrestaShop\Core\Localization\CLDR\NumberSymbolsData $symbolsData)
    {
    }
    /**
     * @return string
     */
    public function getDecimal()
    {
    }
    /**
     * @param string $decimal
     *
     * @return NumberSymbolsData
     */
    public function setDecimal($decimal)
    {
    }
    /**
     * @return string
     */
    public function getGroup()
    {
    }
    /**
     * @param string $group
     *
     * @return NumberSymbolsData
     */
    public function setGroup($group)
    {
    }
    /**
     * @return string
     */
    public function getList()
    {
    }
    /**
     * @param string $list
     *
     * @return NumberSymbolsData
     */
    public function setList($list)
    {
    }
    /**
     * @return string
     */
    public function getPercentSign()
    {
    }
    /**
     * @param string $percentSign
     *
     * @return NumberSymbolsData
     */
    public function setPercentSign($percentSign)
    {
    }
    /**
     * @return string
     */
    public function getMinusSign()
    {
    }
    /**
     * @param string $minusSign
     *
     * @return NumberSymbolsData
     */
    public function setMinusSign($minusSign)
    {
    }
    /**
     * @return string
     */
    public function getPlusSign()
    {
    }
    /**
     * @param string $plusSign
     *
     * @return NumberSymbolsData
     */
    public function setPlusSign($plusSign)
    {
    }
    /**
     * @return string
     */
    public function getExponential()
    {
    }
    /**
     * @param string $exponential
     *
     * @return NumberSymbolsData
     */
    public function setExponential($exponential)
    {
    }
    /**
     * @return string
     */
    public function getSuperscriptingExponent()
    {
    }
    /**
     * @param string $superscriptingExponent
     *
     * @return NumberSymbolsData
     */
    public function setSuperscriptingExponent($superscriptingExponent)
    {
    }
    /**
     * @return string
     */
    public function getPerMille()
    {
    }
    /**
     * @param string $perMille
     *
     * @return NumberSymbolsData
     */
    public function setPerMille($perMille)
    {
    }
    /**
     * @return string
     */
    public function getInfinity()
    {
    }
    /**
     * @param string $infinity
     *
     * @return NumberSymbolsData
     */
    public function setInfinity($infinity)
    {
    }
    /**
     * @return string
     */
    public function getNan()
    {
    }
    /**
     * @param string $nan
     *
     * @return NumberSymbolsData
     */
    public function setNan($nan)
    {
    }
    /**
     * @return string
     */
    public function getTimeSeparator()
    {
    }
    /**
     * @param string $timeSeparator
     *
     * @return NumberSymbolsData
     */
    public function setTimeSeparator($timeSeparator)
    {
    }
    /**
     * @return string
     */
    public function getCurrencyDecimal()
    {
    }
    /**
     * @param string $currencyDecimal
     *
     * @return NumberSymbolsData
     */
    public function setCurrencyDecimal($currencyDecimal)
    {
    }
    /**
     * @return string
     */
    public function getCurrencyGroup()
    {
    }
    /**
     * @param string $currencyGroup
     *
     * @return NumberSymbolsData
     */
    public function setCurrencyGroup($currencyGroup)
    {
    }
}
