<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Interface for services that handles command which edits customer address
 */
interface EditCustomerAddressHandlerInterface
{
    /**
     * @param EditCustomerAddressCommand $command
     *
     * @return AddressId The (potentially) newly created address id
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditCustomerAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId;
}
