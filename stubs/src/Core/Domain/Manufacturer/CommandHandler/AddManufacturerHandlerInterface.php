<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler;

/**
 * Defines contract for AddManufacturerHandler
 */
interface AddManufacturerHandlerInterface
{
    /**
     * @param AddManufacturerCommand $command
     *
     * @return ManufacturerId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\AddManufacturerCommand $command);
}
