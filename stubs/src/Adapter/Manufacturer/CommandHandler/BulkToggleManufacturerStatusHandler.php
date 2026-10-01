<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler;

/**
 * Handles command which toggles manufacturer status in bulk action
 */
final class BulkToggleManufacturerStatusHandler extends \PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler\AbstractManufacturerCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler\BulkToggleManufacturerStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\BulkToggleManufacturerStatusCommand $command)
    {
    }
}
