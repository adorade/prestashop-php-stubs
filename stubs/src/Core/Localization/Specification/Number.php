<?php

namespace PrestaShop\PrestaShop\Core\Localization\Specification;

/**
 * Number specification class.
 *
 * Regroups rules and data used when formatting a decimal number in a given locale and a given numbering system
 * (latin, arab, ...).
 */
class Number implements \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface
{
    /**
     * Positive number pattern.
     *
     * Unicode's CLDR specific syntax. Describes how to format a positive number.
     * eg: #,##0.###     (decimal)
     * eg: #,##0.##0 %   (percentage)
     * eg: #,##0.00 ¤    (price)
     *
     * @var string|null
     */
    protected $positivePattern;
    /**
     * Negative number pattern.
     *
     * Unicode's CLDR specific syntax. Describes how to format a negative number.
     * eg: -#,##0.###     (decimal)
     * eg: -#,##0.##0 %   (percentage)
     * eg: -#,##0.00 ¤    (price)
     *
     * @var string|null
     */
    protected $negativePattern;
    /**
     * List of available number symbols lists (NumberSymbolList objects)
     * Each list is indexed by numbering system.
     *
     * @var NumberSymbolList[]|null
     */
    protected $symbols;
    /**
     * Maximum number of digits after decimal separator (rounding if needed).
     *
     * @var int|null
     */
    protected $maxFractionDigits;
    /**
     * Minimum number of digits after decimal separator (fill with "0" if needed).
     *
     * @var int|null
     */
    protected $minFractionDigits;
    /**
     * Is digits grouping used ?
     * eg: if yes -> "9 999 999". If no => "9999999".
     *
     * @var bool|null
     */
    protected $groupingUsed;
    /**
     * Size of primary digits group in the number
     * e.g.: 999 is the primary group in this number: 1 234 999.567.
     *
     * @var int|null
     */
    protected $primaryGroupSize;
    /**
     * Size of secondary digits groups in the number
     * eg: 999 is a secondary group in this number: 123 999 456.789
     * eg: another secondary group (still 999): 999 123 456.789.
     *
     * @var int|null
     */
    protected $secondaryGroupSize;
    /**
     * Number specification constructor.
     *
     * @param string $positivePattern CLDR formatting pattern for positive amounts
     * @param string $negativePattern CLDR formatting pattern for negative amounts
     * @param NumberSymbolList[] $symbols List of available number symbols lists (NumberSymbolList objects). Each list is indexed by numbering system
     * @param int $maxFractionDigits Maximum number of digits after decimal separator
     * @param int $minFractionDigits Minimum number of digits after decimal separator
     * @param bool $groupingUsed Is digits grouping used ?
     * @param int $primaryGroupSize Size of primary digits group in the number
     * @param int $secondaryGroupSize Size of secondary digits group in the number
     *
     * @throws LocalizationException
     */
    public function __construct($positivePattern, $negativePattern, $symbols, $maxFractionDigits, $minFractionDigits, $groupingUsed, $primaryGroupSize, $secondaryGroupSize)
    {
    }
    /**
     * Get all specified symbols lists, indexed by available numbering system.
     *
     * Each item of the result is a NumberSymbolList
     *
     * @return NumberSymbolList[]
     */
    public function getAllSymbols()
    {
    }
    /**
     * Get the specified symbols list for a given numbering system.
     *
     * @param string $numberingSystem
     *                                Numbering system to use when formatting numbers. @see http://cldr.unicode.org/translation/numbering-systems
     *
     * @return NumberSymbolList
     *
     * @throws LocalizationException
     */
    public function getSymbolsByNumberingSystem($numberingSystem = \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface::NUMBERING_SYSTEM_LATIN)
    {
    }
    /**
     * Get the formatting rules for this number (when positive).
     *
     * This pattern uses the Unicode CLDR number pattern syntax
     *
     * @return string
     */
    public function getPositivePattern()
    {
    }
    /**
     * Get the formatting rules for this number (when negative).
     *
     * This pattern uses the Unicode CLDR number pattern syntax
     *
     * @return string
     */
    public function getNegativePattern()
    {
    }
    /**
     * Get the maximum number of digits after decimal separator (rounding if needed).
     *
     * @return int
     */
    public function getMaxFractionDigits()
    {
    }
    /**
     * Get the minimum number of digits after decimal separator (fill with "0" if needed).
     *
     * @return int
     */
    public function getMinFractionDigits()
    {
    }
    /**
     * Get the "grouping" flag. This flag defines if digits grouping should be used when formatting this number.
     *
     * @return bool
     */
    public function isGroupingUsed()
    {
    }
    /**
     * Get the size of primary digits group in the number.
     *
     * @return int
     */
    public function getPrimaryGroupSize()
    {
    }
    /**
     * Get the size of secondary digits groups in the number.
     *
     * @return int
     */
    public function getSecondaryGroupSize()
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
