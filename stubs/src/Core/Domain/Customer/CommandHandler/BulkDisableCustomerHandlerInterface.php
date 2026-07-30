<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler;

/**
 * Defines interface for handling command that disables given customers.
 */
interface BulkDisableCustomerHandlerInterface
{
    /**
     * @param BulkDisableCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\BulkDisableCustomerCommand $command);
}
