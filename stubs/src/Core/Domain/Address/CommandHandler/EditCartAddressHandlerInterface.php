<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Interface for services that handles command which edits cart address
 */
interface EditCartAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\Command\EditCartAddressCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId The newly created address id
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditCartAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId;
}
