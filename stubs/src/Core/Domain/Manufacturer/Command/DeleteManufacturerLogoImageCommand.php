<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command;

/**
 * Deletes manufacturer logo image
 */
class DeleteManufacturerLogoImageCommand
{
    /**
     * @param int $manufacturerId
     *
     * @throws ManufacturerConstraintException
     */
    public function __construct(int $manufacturerId)
    {
    }
    /**
     * @return ManufacturerId
     */
    public function getManufacturerId(): \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId
    {
    }
}
