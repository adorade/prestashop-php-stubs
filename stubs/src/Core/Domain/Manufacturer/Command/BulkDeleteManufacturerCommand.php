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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerConstraintException
     */
    public function __construct(array $manufacturerIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId[]
     */
    public function getManufacturerIds()
    {
    }
}
