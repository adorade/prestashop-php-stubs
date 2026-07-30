<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler;

/**
 * Defines contract for ToggleManufacturerStatusHandler
 */
interface ToggleManufacturerStatusHandlerInterface
{
    /**
     * @param ToggleManufacturerStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\ToggleManufacturerStatusCommand $command);
}
