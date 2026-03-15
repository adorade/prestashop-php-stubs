<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler;

/**
 * Handles command which deletes manufacturer using legacy object model
 */
final class DeleteManufacturerHandler extends \PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler\AbstractManufacturerCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler\DeleteManufacturerHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\DeleteManufacturerCommand $command)
    {
    }
}
