<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\QueryHandler;

/**
 * Interface GetCurrencyExchangeRateHandlerInterface defines contract for GetCurrencyExchangeRateHandler.
 */
interface GetCurrencyExchangeRateHandlerInterface
{
    /**
     * @param GetCurrencyExchangeRate $query
     *
     * @return ExchangeRate
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetCurrencyExchangeRate $query);
}
