<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\QueryHandler;

/**
 * Class GetCurrencyExchangeRateHandler handles the GetCurrencyExchangeRate query
 * and returns the exchange rate of a specified currency via a ExchangeRate value object.
 */
class GetCurrencyExchangeRateHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\QueryHandler\GetCurrencyExchangeRateHandlerInterface
{
    /**
     * @param ExchangeRateProvider $exchangeRateProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Currency\ExchangeRateProvider $exchangeRateProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetCurrencyExchangeRate $query)
    {
    }
}
