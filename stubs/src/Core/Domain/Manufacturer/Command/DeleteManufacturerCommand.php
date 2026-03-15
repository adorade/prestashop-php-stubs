<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command;

/**
 * Deletes manufacturer
 */
class DeleteManufacturerCommand
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
     * @return ManufacturerId
     */
    public function getManufacturerId()
    {
    }
}
