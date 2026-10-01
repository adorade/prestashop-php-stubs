<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer;

/**
 * Provides reusable methods for manufacturer command/query handlers
 */
abstract class AbstractManufacturerHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * Gets legacy Manufacturer
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId $manufacturerId
     *
     * @return \Manufacturer
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerException
     */
    protected function getManufacturer(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId $manufacturerId)
    {
    }
}
