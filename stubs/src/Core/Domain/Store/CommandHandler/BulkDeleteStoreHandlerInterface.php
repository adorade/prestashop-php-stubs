<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\CommandHandler;

/**
 * Defines contract for BulkDeleteStoreHandler
 */
interface BulkDeleteStoreHandlerInterface
{
    /**
     * @param BulkDeleteStoreCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Command\BulkDeleteStoreCommand $command): void;
}
