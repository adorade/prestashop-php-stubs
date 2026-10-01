<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Interface for services that handles command which adds new manufacturer address
 */
interface AddManufacturerAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\Command\AddManufacturerAddressCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\AddManufacturerAddressCommand $command);
}
