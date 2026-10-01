<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency;

/**
 * Localization Currency data object.
 *
 * This class is only used internally, it is mutable and overridable until fully built. It can then be used as
 * an intermediary data bag to build a real Localization/Currency (immutable) object.
 */
class CurrencyData
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
     * @var string
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
     * @var string[]|null
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
     * @var string[]|null
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
     * @var string[]|null
     */
    protected $patterns;
    public function overrideWith(\PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyData $currencyData)
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
    /**
     * @param bool $isActive
     */
    public function setIsActive($isActive)
    {
    }
    /**
     * @return float
     */
    public function getConversionRate()
    {
    }
    /**
     * @param float $conversionRate
     */
    public function setConversionRate($conversionRate)
    {
    }
    /**
     * @return string
     */
    public function getIsoCode()
    {
    }
    /**
     * @param string $isoCode
     */
    public function setIsoCode($isoCode)
    {
    }
    /**
     * @return string
     */
    public function getNumericIsoCode()
    {
    }
    /**
     * @param string $numericIsoCode
     */
    public function setNumericIsoCode($numericIsoCode)
    {
    }
    /**
     * @return string[]
     */
    public function getSymbols()
    {
    }
    /**
     * @param string[] $symbols
     */
    public function setSymbols($symbols)
    {
    }
    /**
     * @return int
     */
    public function getPrecision()
    {
    }
    /**
     * @param int $precision
     */
    public function setPrecision($precision)
    {
    }
    /**
     * @return string[]
     */
    public function getNames()
    {
    }
    /**
     * @param string[] $names
     */
    public function setNames($names)
    {
    }
    /**
     * Currency patterns, indexed by locale code
     *
     * @return string[]|null
     */
    public function getPatterns(): ?array
    {
    }
    /**
     * Currency patterns, indexed by locale code
     *
     * @param string[] $patterns
     */
    public function setPatterns(array $patterns)
    {
    }
}
