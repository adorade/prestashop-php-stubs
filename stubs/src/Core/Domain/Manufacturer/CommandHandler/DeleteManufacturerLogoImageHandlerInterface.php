<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler;

/**
 * Defines contract for DeleteManufacturerLogoImageHandler
 */
interface DeleteManufacturerLogoImageHandlerInterface
{
    /**
     * @param DeleteManufacturerLogoImageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\DeleteManufacturerLogoImageCommand $command): void;
}
