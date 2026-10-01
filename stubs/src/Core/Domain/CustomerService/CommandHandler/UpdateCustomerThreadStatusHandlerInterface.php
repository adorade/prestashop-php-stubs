<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * Interface for service that handles updating thread status
 */
interface UpdateCustomerThreadStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\UpdateCustomerThreadStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\UpdateCustomerThreadStatusCommand $command);
}
