<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler;

/**
 * Provides reusable methods for manufacturer command handlers
 */
abstract class AbstractManufacturerCommandHandler extends \PrestaShop\PrestaShop\Adapter\Manufacturer\AbstractManufacturerHandler
{
    /**
     * Deletes legacy Manufacturer
     *
     * @param Manufacturer $manufacturer
     *
     * @return bool
     *
     * @throws ManufacturerException
     */
    protected function deleteManufacturer(\Manufacturer $manufacturer)
    {
    }
    /**
     * Toggles legacy manufacturer status
     *
     * @param Manufacturer $manufacturer
     * @param bool $newStatus
     *
     * @return bool
     *
     * @throws ManufacturerException
     */
    protected function toggleManufacturerStatus(\Manufacturer $manufacturer, $newStatus)
    {
    }
}
