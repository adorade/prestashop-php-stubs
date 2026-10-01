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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerConstraintException
     */
    public function __construct(int $manufacturerId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId
     */
    public function getManufacturerId(): \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId
    {
    }
}
