<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler;

/**
 * Interface for service that handles command that adds new customer
 */
interface AddCustomerHandlerInterface
{
    /**
     * @param AddCustomerCommand $command
     *
     * @return CustomerId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\AddCustomerCommand $command);
}
