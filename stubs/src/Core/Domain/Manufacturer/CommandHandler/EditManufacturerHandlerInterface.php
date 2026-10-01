<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler;

/**
 * Defines contract for EditManufacturerHandler
 */
interface EditManufacturerHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\EditManufacturerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\EditManufacturerCommand $command);
}
