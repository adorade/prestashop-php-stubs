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
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public static function getDefaultExchangeRate(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param float $exchangeRate
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
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
