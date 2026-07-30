<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler;

/**
 * Defines interface for services that handles setting required fields for customer command.
 */
interface SetRequiredFieldsForCustomerHandlerInterface
{
    /**
     * @param SetRequiredFieldsForCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\SetRequiredFieldsForCustomerCommand $command);
}
