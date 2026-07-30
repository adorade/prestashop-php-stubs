<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface for service that toggles status for multiple currencies
 */
interface BulkToggleCurrenciesStatusHandlerInterface
{
    /**
     * @param BulkToggleCurrenciesStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\BulkToggleCurrenciesStatusCommand $command);
}
