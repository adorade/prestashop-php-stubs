<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler;

/**
 * Defines contract for BulkDeleteManufacturerHandler
 */
interface BulkDeleteManufacturerHandlerInterface
{
    /**
     * @param BulkDeleteManufacturerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\BulkDeleteManufacturerCommand $command);
}
