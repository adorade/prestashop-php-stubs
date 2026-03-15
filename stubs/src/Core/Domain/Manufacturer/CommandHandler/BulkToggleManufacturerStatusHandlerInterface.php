<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler;

/**
 * Defines contract for BulkToggleManufacturerStatusHandler
 */
interface BulkToggleManufacturerStatusHandlerInterface
{
    /**
     * @param BulkToggleManufacturerStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\BulkToggleManufacturerStatusCommand $command);
}
