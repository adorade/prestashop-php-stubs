<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult;

/**
 * Class ExchangeRate
 */
class ExchangeRate
{
    /**
     * @param DecimalNumber $exchangeRate
     */
    public function __construct(\PrestaShop\Decimal\DecimalNumber $exchangeRate)
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getValue(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
