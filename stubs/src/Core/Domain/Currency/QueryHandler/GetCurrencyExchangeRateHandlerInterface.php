<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\QueryHandler;

/**
 * Interface GetCurrencyExchangeRateHandlerInterface defines contract for GetCurrencyExchangeRateHandler.
 */
interface GetCurrencyExchangeRateHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetCurrencyExchangeRate $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult\ExchangeRate
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetCurrencyExchangeRate $query);
}
