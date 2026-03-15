<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler;

/**
 * Defines interface for customer bulk delete command handler.
 */
interface BulkDeleteCustomerSessionsHandlerInterface
{
    /**
     * @param BulkDeleteCustomerSessionsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\BulkDeleteCustomerSessionsCommand $command): void;
}
