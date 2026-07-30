<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler;

/**
 * Defines interface for handling command that enables given customers.
 */
interface BulkEnableCustomerHandlerInterface
{
    /**
     * @param BulkEnableCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\BulkEnableCustomerCommand $command);
}
