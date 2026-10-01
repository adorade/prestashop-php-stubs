<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Interface for services that handles command which edits customer address
 */
interface EditCustomerAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\Command\EditCustomerAddressCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId The (potentially) newly created address id
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditCustomerAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId;
}
