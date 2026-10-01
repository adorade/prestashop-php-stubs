<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler;

/**
 * Handles command which edits manufacturer using legacy object model
 */
final class EditManufacturerHandler extends \PrestaShop\PrestaShop\Adapter\Manufacturer\AbstractManufacturerHandler implements \PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler\EditManufacturerHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\EditManufacturerCommand $command)
    {
    }
}
