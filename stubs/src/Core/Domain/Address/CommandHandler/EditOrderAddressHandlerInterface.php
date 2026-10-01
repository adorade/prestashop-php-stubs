<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Interface for services that handles command which edits order address
 */
interface EditOrderAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\Command\EditOrderAddressCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId The newly created address id
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditOrderAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId;
}
