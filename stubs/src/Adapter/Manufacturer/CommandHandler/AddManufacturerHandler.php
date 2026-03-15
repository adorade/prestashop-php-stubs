<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler;

/**
 * Handles command which adds new manufacturer using legacy object model
 */
final class AddManufacturerHandler extends \PrestaShop\PrestaShop\Adapter\Manufacturer\AbstractManufacturerHandler implements \PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler\AddManufacturerHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\AddManufacturerCommand $command)
    {
    }
}
