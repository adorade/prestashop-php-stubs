<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command;

/**
 * Toggles manufacturer status
 */
class ToggleManufacturerStatusCommand
{
    /**
     * @param int $manufacturerId
     * @param bool $expectedStatus
     *
     * @throws ManufacturerConstraintException
     */
    public function __construct($manufacturerId, $expectedStatus)
    {
    }
    /**
     * @return ManufacturerId
     */
    public function getManufacturerId()
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus()
    {
    }
}
