<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command;

/**
 * Deletes manufacturers in bulk action
 */
class BulkDeleteManufacturerCommand
{
    /**
     * @param int[] $manufacturerIds
     *
     * @throws ManufacturerConstraintException
     */
    public function __construct(array $manufacturerIds)
    {
    }
    /**
     * @return ManufacturerId[]
     */
    public function getManufacturerIds()
    {
    }
}
