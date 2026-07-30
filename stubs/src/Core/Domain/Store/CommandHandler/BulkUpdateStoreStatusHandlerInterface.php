<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\CommandHandler;

/**
 * Defines contract for BulkUpdateStoreStatusHandler
 */
interface BulkUpdateStoreStatusHandlerInterface
{
    /**
     * @param BulkUpdateStoreStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Command\BulkUpdateStoreStatusCommand $command): void;
}
