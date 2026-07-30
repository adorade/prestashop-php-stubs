<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Class RefreshExchangeRatesHandler is responsible for refreshing currency exchange rates.
 *
 * @internal
 */
final class RefreshExchangeRatesHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\RefreshExchangeRatesHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CurrencyException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\RefreshExchangeRatesCommand $command)
    {
    }
}
