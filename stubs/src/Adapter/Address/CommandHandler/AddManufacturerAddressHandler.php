<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * Adds manufacturer address using legacy object model
 */
final class AddManufacturerAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\AddManufacturerAddressHandlerInterface
{
    /**
     * @param AddManufacturerAddressCommand $command
     *
     * @return AddressId
     *
     * @throws AddressException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\AddManufacturerAddressCommand $command)
    {
    }
}
