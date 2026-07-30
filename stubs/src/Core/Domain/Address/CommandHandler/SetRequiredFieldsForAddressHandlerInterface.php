<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Defines interface for services that handles setting required fields for address command.
 */
interface SetRequiredFieldsForAddressHandlerInterface
{
    /**
     * @param SetRequiredFieldsForAddressCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\SetRequiredFieldsForAddressCommand $command);
}
