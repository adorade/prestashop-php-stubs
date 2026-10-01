<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Class RefreshExchangeRatesHandler is responsible for refreshing currency exchange rates.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class RefreshExchangeRatesHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\RefreshExchangeRatesHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\RefreshExchangeRatesCommand $command)
    {
    }
}
