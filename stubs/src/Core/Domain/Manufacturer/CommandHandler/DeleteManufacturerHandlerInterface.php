<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler;

/**
 * Defines contract for DeleteManufacturerHandler
 */
interface DeleteManufacturerHandlerInterface
{
    /**
     * @param DeleteManufacturerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\DeleteManufacturerCommand $command);
}
