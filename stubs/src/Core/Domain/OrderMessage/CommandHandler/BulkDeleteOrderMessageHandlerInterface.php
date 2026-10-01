<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\CommandHandler;

/**
 * Interface for service that handles deleting of order messages
 */
interface BulkDeleteOrderMessageHandlerInterface
{
    /***
     * @param BulkDeleteOrderMessageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\BulkDeleteOrderMessageCommand $command): void;
}
