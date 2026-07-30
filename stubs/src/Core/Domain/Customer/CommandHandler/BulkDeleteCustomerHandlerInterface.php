<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler;

/**
 * Defines interface for customer bulk delete command handler.
 */
interface BulkDeleteCustomerHandlerInterface
{
    /**
     * @param BulkDeleteCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\BulkDeleteCustomerCommand $command);
}
