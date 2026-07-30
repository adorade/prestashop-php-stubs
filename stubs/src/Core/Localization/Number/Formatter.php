<?php

namespace PrestaShop\PrestaShop\Core\Localization\Number;

/**
 * Formats a number (raw, price, percentage) according to passed specifications.
 */
class Formatter
{
    /**
     * These placeholders are used in CLDR number formatting templates.
     * They are meant to be replaced by the correct localized symbols in the number formatting process.
     */
    public const CURRENCY_SYMBOL_PLACEHOLDER = '¤';
    public const DECIMAL_SEPARATOR_PLACEHOLDER = '.';
    public const GROUP_SEPARATOR_PLACEHOLDER = ',';
    public const MINUS_SIGN_PLACEHOLDER = '-';
    public const PERCENT_SYMBOL_PLACEHOLDER = '%';
    public const PLUS_SIGN_PLACEHOLDER = '+';
    /**
     * @var string The wanted rounding mode when formatting numbers.
     *             Cf. PrestaShop\Decimal\Operation\Rounding::ROUND_* values
     */
    protected $roundingMode;
    /**
     * @var string Numbering system to use when formatting numbers
     *
     * @see http://cldr.unicode.org/translation/numbering-systems
     */
    protected $numberingSystem;
    /**
     * Number specification to be used when formatting a number.
     *
     * @var NumberSpecification
     */
    protected $numberSpecification;
    /**
     * Create a number formatter instance.
     *
     * @param string $roundingMode The wanted rounding mode when formatting numbers
     *                             Cf. PrestaShop\Decimal\Operation\Rounding::ROUND_* values
     * @param string $numberingSystem Numbering system to use when formatting numbers
     *
     *                             @see http://cldr.unicode.org/translation/numbering-systems
     */
    public function __construct($roundingMode, $numberingSystem)
    {
    }
    /**
     * Formats the passed number according to specifications.
     *
     * @param int|float|string $number
     *                                 The number to format
     * @param NumberSpecification $specification
     *                                           Number specification to be used (can be a number spec, a price spec, a percentage spec)
     *
     * @return string
     *                The formatted number
     *                You should use this this value for display, without modifying it
     *
     * @throws LocalizationException
     */
    public function format($number, \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface $specification)
    {
    }
    /**
     * Prepares a basic number (either a string, an integer or a float) to be formatted.
     *
     * @param string|float|int $number The number to be prepared
     *
     * @return DecimalNumber The prepared number
     */
    protected function prepareNumber($number)
    {
    }
    /**
     * Get $number's major and minor digits.
     *
     * Major digits are the "integer" part (before decimal separator), minor digits are the fractional part
     * Result will be an array of exactly 2 items: [$majorDigits, $minorDigits]
     *
     * Usage example:
     *  list($majorDigits, $minorDigits) = $this->getMajorMinorDigits($decimalNumber);
     *
     * @param DecimalNumber $number
     *
     * @return string[]
     */
    protected function extractMajorMinorDigits(\PrestaShop\Decimal\DecimalNumber $number)
    {
    }
    /**
     * Splits major digits into groups.
     *
     * e.g.: Given the major digits "1234567", and major group size
     *  configured to 3 digits, the result would be "1 234 567"
     *
     * @param string $majorDigits The major digits to be grouped
     *
     * @return string The grouped major digits
     */
    protected function splitMajorGroups($majorDigits)
    {
    }
    /**
     * Adds or remove trailing zeroes, depending on specified min and max fraction digits numbers.
     *
     * @param string $minorDigits Digits to be adjusted with (trimmed or padded) zeroes
     *
     * @return string The adjusted minor digits
     */
    protected function adjustMinorDigitsZeroes($minorDigits)
    {
    }
    /**
     * Get the CLDR formatting pattern.
     *
     * @see http://cldr.unicode.org/translation/number-patterns
     *
     * @param bool $isNegative
     *                         If true, the negative pattern will be returned instead of the positive one
     *
     * @return string
     *                The CLDR formatting pattern
     */
    protected function getCldrPattern($isNegative)
    {
    }
    /**
     * Localize the passed number.
     *
     * If needed, occidental ("latn") digits are replaced with the relevant
     * ones (for instance with arab digits).
     * Symbol placeholders will also be replaced by the real symbols (configured
     * in number specification)
     *
     * @param string $number
     *                       The number to be processed
     *
     * @return string
     *                The number after digits and symbols replacement
     */
    protected function localizeNumber($number)
    {
    }
    /**
     * Replace latin digits with relevant numbering system's digits.
     *
     * @param string $number
     *                       The number to process
     *
     * @return string
     *                The number with replaced digits
     */
    protected function replaceDigits($number)
    {
    }
    /**
     * Replace placeholder number symbols with relevant numbering system's symbols.
     *
     * @param string $number
     *                       The number to process
     *
     * @return string
     *                The number with replaced symbols
     */
    protected function replaceSymbols($number)
    {
    }
    /**
     * Add missing placeholders to the number using the passed CLDR pattern.
     *
     * Missing placeholders can be the percent sign, currency symbol, etc.
     *
     * e.g. with a currency CLDR pattern:
     *  - Passed number (partially formatted): 1,234.567
     *  - Returned number: 1,234.567 ¤
     *  ("¤" symbol is the currency symbol placeholder)
     *
     * @see http://cldr.unicode.org/translation/number-patterns
     *
     * @param string $formattedNumber Number to process
     * @param string $pattern CLDR formatting pattern to use
     *
     * @return string
     */
    protected function addPlaceholders($formattedNumber, $pattern)
    {
    }
    /**
     * Perform some more specific replacements.
     *
     * Specific replacements are needed when number specification is extended.
     * For instance, prices have an extended number specification in order to
     * add currency symbol to the formatted number.
     *
     * @param string $formattedNumber
     *
     * @return mixed
     */
    public function performSpecificReplacements($formattedNumber)
    {
    }
    /**
     * Try to replace currency placeholder by actual currency.
     *
     * Placeholder will be replaced either by the symbol or the ISO code, depending on price specification
     *
     * @param string $formattedNumber The number to format
     *
     * @return string The number after currency replacement
     */
    protected function tryCurrencyReplacement($formattedNumber)
    {
    }
}
