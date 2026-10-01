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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerConstraintException
     */
    public function __construct($manufacturerId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId
     */
    public function getManufacturerId()
    {
    }
}
