<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query;

/**
 * Gets manufacturer for editing in Back Office
 */
class GetManufacturerForEditing
{
    /**
     * @param int $manufacturerId
     *
     * @throws ManufacturerConstraintException
     */
    public function __construct($manufacturerId)
    {
    }
    /**
     * @return ManufacturerId $manufacturerId
     */
    public function getManufacturerId()
    {
    }
}
