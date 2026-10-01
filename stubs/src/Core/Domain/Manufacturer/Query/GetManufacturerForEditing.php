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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerConstraintException
     */
    public function __construct($manufacturerId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId $manufacturerId
     */
    public function getManufacturerId()
    {
    }
}
