<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult;

/**
 * Class ExchangeRate
 */
class ExchangeRate
{
    /**
     * @param \PrestaShop\Decimal\DecimalNumber $exchangeRate
     */
    public function __construct(\PrestaShop\Decimal\DecimalNumber $exchangeRate)
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getValue(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
