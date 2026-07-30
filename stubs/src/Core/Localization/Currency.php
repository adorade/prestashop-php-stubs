<?php

namespace PrestaShop\PrestaShop\Core\Localization;

/**
 * The Currency class is used to feed callers with currency-related data.
 *
 * For instance, the LocaleRepository uses currency data to build Price specifications
 */
class Currency implements \PrestaShop\PrestaShop\Core\Localization\CurrencyInterface
{
    /**
     * Is this currency active ?
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Conversion rate of this currency against the default shop's currency.
     *
     * Price in currency A * currency A's conversion rate = price in default currency
     *
     * Example:
     * Given the Euro as default shop's currency,
     * If 1 dollar = 1.31 euros,
     * Then conversion rate for Dollar will be 1.31
     *
     * @var float
     */
    protected $conversionRate;
    /**
     * Currency's alphabetic ISO code (ISO 4217).
     *
     * @see https://www.iso.org/iso-4217-currency-codes.html
     *
     * @var string
     */
    protected $isoCode;
    /**
     * Currency's numeric ISO code (ISO 4217).
     *
     * @see https://www.iso.org/iso-4217-currency-codes.html
     *
     * @var int
     */
    protected $numericIsoCode;
    /**
     * Currency's symbols, by locale code.
     *
     * eg.: $symbolsUSD = [
     *     'en-US' => '$',
     *     'es-CO' => 'US$', // In Colombia, colombian peso's symbol is "$". They have to differentiate foreign dollars.
     * ]
     *
     * @var string[]
     */
    protected $symbols;
    /**
     * Number of decimal digits to use with this currency.
     *
     * @var int
     */
    protected $precision;
    /**
     * the currency's name, by locale code.
     *
     * @var string[]
     */
    protected $names;
    /**
     * Currency's patterns, by locale code.
     *
     * eg.: $patternsUSD = [
     *     'fr-FR' => '#,##0.00 ¤',
     *     'en-EN' => '¤#,##0.00',
     * ]
     *
     * @var string[]
     */
    protected $patterns;
    /**
     * @param bool $isActive Is this currency active ?
     * @param float $conversionRate Conversion rate of this currency against the default shop's currency
     * @param string $isoCode Currency's alphabetic ISO code (ISO 4217)
     * @param int|null $numericIsoCode Currency's numeric ISO code (ISO 4217)
     * @param string[] $symbols Currency's symbols, by locale code
     * @param int $precision Number of decimal digits to use with this currency
     * @param string[] $names the currency's name, by locale code
     * @param string[] $patterns the currency's pattern, by locale code
     */
    public function __construct($isActive, $conversionRate, $isoCode, $numericIsoCode, $symbols, $precision, $names, $patterns = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isActive()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConversionRate()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIsoCode()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getNumericIsoCode()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws LocalizationException
     */
    public function getSymbol($localeCode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDecimalPrecision()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws LocalizationException
     */
    public function getName($localeCode)
    {
    }
    /**
     * @param string $localeCode
     *
     * @return string
     */
    public function getPattern($localeCode)
    {
    }
}
