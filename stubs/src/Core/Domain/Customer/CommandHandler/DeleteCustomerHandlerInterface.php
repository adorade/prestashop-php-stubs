<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler;

/**
 * Defines interface for handling command that deletes given customer.
 */
interface DeleteCustomerHandlerInterface
{
    /**
     * @param DeleteCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\DeleteCustomerCommand $command);
}
