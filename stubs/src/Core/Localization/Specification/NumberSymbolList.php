<?php

namespace PrestaShop\PrestaShop\Core\Localization\Specification;

/**
 * Number's symbols data object. Regroups all symbols used when formatting a number
 * (decimal separator, thousands separator, etc.).
 */
class NumberSymbolList
{
    /**
     * Decimal separator character.
     *
     * Separates the integer and fractional part of the number.
     *
     * @var string|null
     */
    protected $decimal;
    /**
     * Digits group separator character.
     *
     * separates clusters of integer digits to make large numbers more legible; commonly used for thousands(grouping
     * size 3, e.g. "100,000,000") or in some locales, ten-thousands (grouping size 4, e.g. "1,0000,0000").
     *
     * @var string|null
     */
    protected $group;
    /**
     * List elements separator character.
     *
     * Symbol used to separate numbers in a list intended to represent structured data such as an array.
     *
     * @var string|null
     */
    protected $list;
    /**
     * Percent sign character.
     *
     * Used to indicate a percentage (1/100th) amount.
     *
     * @var string|null
     */
    protected $percentSign;
    /**
     * Minus sign character.
     *
     * Symbol used to denote negative value.
     *
     * @var string|null
     */
    protected $minusSign;
    /**
     * Plus sign character.
     *
     * Symbol used to denote positive value.
     * It can be used to produce modified patterns, so that 3.12 is formatted as "+3.12", for example.
     *
     * @var string|null
     */
    protected $plusSign;
    /**
     * Exponential character.
     *
     * Symbol separating the mantissa and exponent values.
     *
     * @var string|null
     */
    protected $exponential;
    /**
     * Superscripting exponent character.
     *
     * Used in numbers to show a format like "1.23 × 10^4"
     * (exponential character is a shortcut for "× 10^n" notation)
     *
     * @var string|null
     */
    protected $superscriptingExponent;
    /**
     * Permille sign character.
     *
     * Used to define them as a per-mille (1/1000th) amount.
     *
     * @var string|null
     */
    protected $perMille;
    /**
     * The infinity sign. Corresponds to the IEEE infinity bit pattern.
     *
     * @var string|null
     */
    protected $infinity;
    /**
     * The NaN (Not A Number) sign. Corresponds to the IEEE NaN bit pattern.
     *
     * @var string|null
     */
    protected $nan;
    /**
     * NumberSymbolList constructor.
     *
     * @param string $decimal Decimal separator character
     * @param string $group Digits group separator character
     * @param string $list List elements separator character
     * @param string $percentSign Percent sign character
     * @param string $minusSign Minus sign character
     * @param string $plusSign Plus sign character
     * @param string $exponential Exponential character
     * @param string $superscriptingExponent Superscripting exponent character
     * @param string $perMille Permille sign character
     * @param string $infinity The infinity sign. Corresponds to the IEEE infinity bit pattern.
     * @param string $nan The NaN (Not A Number) sign. Corresponds to the IEEE NaN bit pattern.
     *
     * @throws LocalizationException
     */
    public function __construct($decimal, $group, $list, $percentSign, $minusSign, $plusSign, $exponential, $superscriptingExponent, $perMille, $infinity, $nan)
    {
    }
    /**
     * Get the decimal separator.
     *
     * @return string
     */
    public function getDecimal()
    {
    }
    /**
     * Get the digit groups separator.
     *
     * @return string
     */
    public function getGroup()
    {
    }
    /**
     * Get the list elements separator.
     *
     * @return string
     */
    public function getList()
    {
    }
    /**
     * Get the percent sign.
     *
     * @return string
     */
    public function getPercentSign()
    {
    }
    /**
     * Get the minus sign.
     *
     * @return string
     */
    public function getMinusSign()
    {
    }
    /**
     * Get the plus sign.
     *
     * @return string
     */
    public function getPlusSign()
    {
    }
    /**
     * Get the exponential character.
     *
     * @return string
     */
    public function getExponential()
    {
    }
    /**
     * Get the exponent character.
     *
     * @return string
     */
    public function getSuperscriptingExponent()
    {
    }
    /**
     * Gert the per mille symbol (often "‰").
     *
     * @see https://en.wikipedia.org/wiki/Per_mille
     *
     * @return string
     */
    public function getPerMille()
    {
    }
    /**
     * Get the infinity symbol (often "∞").
     *
     * @see https://en.wikipedia.org/wiki/Infinity_symbol
     *
     * @return string
     */
    public function getInfinity()
    {
    }
    /**
     * Get the NaN (not a number) sign.
     *
     * @return string
     */
    public function getNan()
    {
    }
    /**
     * Symbols list validation.
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
    public function toArray()
    {
    }
}
