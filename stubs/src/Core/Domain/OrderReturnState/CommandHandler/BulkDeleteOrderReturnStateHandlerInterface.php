<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\CommandHandler;

/**
 * Defines contract for BulkDeleteOrderStateHandler
 */
interface BulkDeleteOrderReturnStateHandlerInterface
{
    /**
     * @param BulkDeleteOrderReturnStateCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command\BulkDeleteOrderReturnStateCommand $command): void;
}
