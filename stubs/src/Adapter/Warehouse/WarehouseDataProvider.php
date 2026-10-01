<?php

namespace PrestaShop\PrestaShop\Adapter\Warehouse;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This class will provide data from DB / ORM about Warehouse.
 */
class WarehouseDataProvider
{
    /**
     * Get product warehouses.
     *
     * @param int $id_product
     *
     * @return array Warehouses
     */
    public function getWarehouseProductLocations($id_product)
    {
    }
    /**
     * Get all warehouses.
     *
     * @param bool $ignore_shop Optional, false by default - Allows to get only the warehouses that are associated to one/some shops (@see $id_shop)
     * @param int $id_shop optional, Context::shop::Id by default - Allows to define a specific shop to filter
     *
     * @return array Warehouses (ID, reference/name concatenated)
     */
    public function getWarehouses($ignore_shop = false, $id_shop = null)
    {
    }
    /**
     * For a given product and warehouse, gets the product warehouse data.
     *
     * @param int $id_product
     * @param int $id_product_attribute
     * @param int $id_warehouse
     *
     * @return array
     */
    public function getWarehouseProductLocationData($id_product, $id_product_attribute, $id_warehouse)
    {
    }
}
