<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\QueryResult;

/**
 * Stores query result for getting supplier for viewing
 */
class ViewableSupplier
{
    /**
     * @param string $name
     * @param array $supplierProducts
     */
    public function __construct($name, array $supplierProducts)
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
    public function getSupplierProducts()
    {
    }
}
