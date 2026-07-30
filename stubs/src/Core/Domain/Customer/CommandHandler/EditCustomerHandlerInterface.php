<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler;

/**
 * Interface for service that handles customer editing command
 */
interface EditCustomerHandlerInterface
{
    /**
     * @param EditCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\EditCustomerCommand $command);
}
