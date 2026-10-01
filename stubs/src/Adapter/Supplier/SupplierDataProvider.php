<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This class will provide data from DB / ORM about Supplier.
 */
class SupplierDataProvider
{
    /**
     * Get all suppliers.
     *
     * @param bool $get_nb_products
     * @param int $id_lang
     * @param bool $active
     * @param bool $p
     * @param bool $n
     * @param bool $all_groups
     *
     * @return array Suppliers
     */
    public function getSuppliers($get_nb_products = false, $id_lang = 0, $active = true, $p = false, $n = false, $all_groups = false)
    {
    }
    /**
     * Get product suppliers.
     *
     * @param int $id_product
     * @param bool $group_by_supplier
     *
     * @return array Suppliers
     */
    public function getProductSuppliers($id_product, $group_by_supplier = true)
    {
    }
    /**
     * For a given product and supplier, gets the product supplier data.
     *
     * @param int $id_product
     * @param int $id_product_attribute
     * @param int $id_supplier
     *
     * @return array
     */
    public function getProductSupplierData($id_product, $id_product_attribute, $id_supplier)
    {
    }
    /**
     * Get supplier name by id.
     *
     * @param int $id_supplier
     *
     * @return string
     */
    public function getNameById($id_supplier)
    {
    }
}
