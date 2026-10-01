<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler;

/**
 * Defines contract for AddManufacturerHandler
 */
interface AddManufacturerHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\AddManufacturerCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\AddManufacturerCommand $command);
}
