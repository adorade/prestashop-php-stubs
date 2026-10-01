<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * Adds manufacturer address using legacy object model
 */
final class AddManufacturerAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\AddManufacturerAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\Command\AddManufacturerAddressCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\AddManufacturerAddressCommand $command)
    {
    }
}
