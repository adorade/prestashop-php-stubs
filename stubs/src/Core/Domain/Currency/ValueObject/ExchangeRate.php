<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject;

/**
 * Class ExchangeRate
 */
class ExchangeRate
{
    public const DEFAULT_RATE = 1.0;
    /**
     * Get the default exchange rate as a DecimalNumber
     *
     * @return DecimalNumber
     */
    public static function getDefaultExchangeRate(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param float $exchangeRate
     *
     * @throws CurrencyConstraintException
     */
    public function __construct($exchangeRate)
    {
    }
    /**
     * @return float
     */
    public function getValue()
    {
    }
}
