<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * Handles command which edits manufacturer address
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditManufacturerAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditManufacturerAddressHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditManufacturerAddressCommand $command)
    {
    }
}
