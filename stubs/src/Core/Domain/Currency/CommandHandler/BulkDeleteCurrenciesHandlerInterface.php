<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface for service that deletes currencies in bulk action
 */
interface BulkDeleteCurrenciesHandlerInterface
{
    /**
     * @param BulkDeleteCurrenciesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\BulkDeleteCurrenciesCommand $command);
}
