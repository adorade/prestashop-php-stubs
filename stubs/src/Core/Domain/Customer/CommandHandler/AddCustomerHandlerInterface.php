<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler;

/**
 * Interface for service that handles command that adds new customer
 */
interface AddCustomerHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Command\AddCustomerCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\AddCustomerCommand $command);
}
