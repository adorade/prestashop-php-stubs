<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Interface for services that handles command which edits manufacturer address
 */
interface EditManufacturerAddressHandlerInterface
{
    /**
     * @param EditManufacturerAddressCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditManufacturerAddressCommand $command);
}
