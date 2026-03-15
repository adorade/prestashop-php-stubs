<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command;

/**
 * Toggles manufacturer status in bulk action
 */
class BulkToggleManufacturerStatusCommand
{
    /**
     * @param int[] $manufacturerIds
     * @param bool $expectedStatus
     *
     * @throws ManufacturerConstraintException
     * @throws ManufacturerConstraintException
     */
    public function __construct(array $manufacturerIds, $expectedStatus)
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus()
    {
    }
    /**
     * @return ManufacturerId[]
     */
    public function getManufacturerIds()
    {
    }
}
