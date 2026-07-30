<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryResult;

/**
 * Stores query result for getting manufacturer for viewing
 */
class ViewableManufacturer
{
    /**
     * @param string $name
     * @param array $manufacturerAddresses
     * @param array $manufacturerProducts
     */
    public function __construct($name, array $manufacturerAddresses, array $manufacturerProducts)
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return array
     */
    public function getManufacturerAddresses()
    {
    }
    /**
     * @return array
     */
    public function getManufacturerProducts()
    {
    }
}
