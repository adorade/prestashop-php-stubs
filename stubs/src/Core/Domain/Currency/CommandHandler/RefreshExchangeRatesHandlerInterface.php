<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface RefreshExchangeRatesHandlerInterface defines contract for UpdateExchangeRatesHandler.
 */
interface RefreshExchangeRatesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Command\RefreshExchangeRatesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\RefreshExchangeRatesCommand $command);
}
