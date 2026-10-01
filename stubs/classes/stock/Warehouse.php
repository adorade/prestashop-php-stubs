<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
/**
 * Holds Stock.
 *
 * @since 1.5.0
 */
class WarehouseCore extends \ObjectModel
{
    /** @var int identifier of the warehouse */
    public $id;
    /** @var int Id of the address associated to the warehouse */
    public $id_address;
    /** @var string Reference of the warehouse */
    public $reference;
    /** @var string Name of the warehouse */
    public $name;
    /** @var int Id of the employee who manages the warehouse */
    public $id_employee;
    /** @var int Id of the valuation currency of the warehouse */
    public $id_currency;
    /** @var bool True if warehouse has been deleted (hence, no deletion in DB) */
    public $deleted = \false;
    /**
     * Describes the way a Warehouse is managed.
     *
     * @var string enum WA|LIFO|FIFO
     */
    public $management_type;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'warehouse', 'primary' => 'id_warehouse', 'fields' => ['id_address' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'reference' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => \true, 'size' => 64], 'name' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => \true, 'size' => 45], 'id_employee' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'management_type' => ['type' => self::TYPE_STRING, 'validate' => 'isStockManagement', 'required' => \true], 'id_currency' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'deleted' => ['type' => self::TYPE_BOOL]]];
    /**
     * @see ObjectModel::$webserviceParameters
     */
    protected $webserviceParameters = ['fields' => ['id_address' => ['xlink_resource' => 'addresses'], 'id_employee' => ['xlink_resource' => 'employees'], 'id_currency' => ['xlink_resource' => 'currencies'], 'valuation' => ['getter' => 'getWsStockValue', 'setter' => \false], 'deleted' => []], 'associations' => ['stocks' => ['resource' => 'stock', 'fields' => ['id' => []]], 'carriers' => ['resource' => 'carrier', 'fields' => ['id' => []]], 'shops' => ['resource' => 'shop', 'fields' => ['id' => [], 'name' => []]]]];
    /**
     * Gets the shops associated to the current warehouse.
     *
     * @return array Shops (id, name)
     */
    public function getShops()
    {
    }
    /**
     * Gets the carriers associated to the current warehouse.
     *
     * @return array Ids of the associated carriers
     */
    public function getCarriers($return_reference = \false)
    {
    }
    /**
     * Sets the carriers associated to the current warehouse.
     *
     * @param array $ids_carriers
     */
    public function setCarriers($ids_carriers)
    {
    }
    /**
     * For a given carrier, removes it from the warehouse/carrier association
     * If $id_warehouse is set, it only removes the carrier for this warehouse.
     *
     * @param int $id_carrier Id of the carrier to remove
     * @param int $id_warehouse optional Id of the warehouse to filter
     */
    public static function removeCarrier($id_carrier, $id_warehouse = \null)
    {
    }
    /**
     * Checks if a warehouse is empty - i.e. has no stock.
     *
     * @return bool
     */
    public function isEmpty()
    {
    }
    /**
     * Checks if the given warehouse exists.
     *
     * @param int $id_warehouse
     *
     * @return bool Exists/Does not exist
     */
    public static function exists($id_warehouse)
    {
    }
    /**
     * For a given {product, product attribute} sets its location in the given warehouse
     * First, for the given parameters, it cleans the database before updating.
     *
     * @param int $id_product ID of the product
     * @param int $id_product_attribute Use 0 if this product does not have attributes
     * @param int $id_warehouse ID of the warehouse
     * @param string $location Describes the location (no lang id required)
     *
     * @return bool Success/Failure
     */
    public static function setProductLocation($id_product, $id_product_attribute, $id_warehouse, $location)
    {
    }
    /**
     * Resets all product locations for this warehouse.
     */
    public function resetProductsLocations()
    {
    }
    /**
     * For a given {product, product attribute} gets its location in the given warehouse.
     *
     * @param int $id_product ID of the product
     * @param int $id_product_attribute Use 0 if this product does not have attributes
     * @param int $id_warehouse ID of the warehouse
     *
     * @return string Location of the product
     */
    public static function getProductLocation($id_product, $id_product_attribute, $id_warehouse)
    {
    }
    /**
     * For a given {product, product attribute} gets warehouse list.
     *
     * @param int $id_product ID of the product
     * @param int $id_product_attribute Optional, uses 0 if this product does not have attributes
     * @param int $id_shop Optional, ID of the shop. Uses the context shop id (@see Context::shop)
     *
     * @return array Warehouses (ID, reference/name concatenated)
     */
    public static function getProductWarehouseList($id_product, $id_product_attribute = 0, $id_shop = \null)
    {
    }
    /**
     * Gets available warehouses
     * It is possible via ignore_shop and id_shop to filter the list with shop id.
     *
     * @param bool $ignore_shop Optional, false by default - Allows to get only the warehouses that are associated to one/some shops (@see $id_shop)
     * @param int $id_shop optional, Context::shop::Id by default - Allows to define a specific shop to filter
     *
     * @return array Warehouses (ID, reference/name concatenated)
     */
    public static function getWarehouses($ignore_shop = \false, $id_shop = \null)
    {
    }
    /**
     * Gets warehouses grouped by shops.
     *
     * @return array (of array) Warehouses ID are grouped by shops ID
     */
    public static function getWarehousesGroupedByShops()
    {
    }
    /**
     * Gets the number of products in the current warehouse.
     *
     * @return int Number of different id_stock
     */
    public function getNumberOfProducts()
    {
    }
    /**
     * Gets the number of quantities - for all products - in the current warehouse.
     *
     * @return int Total Quantity
     */
    public function getQuantitiesOfProducts()
    {
    }
    /**
     * Gets the value of the stock in the current warehouse.
     *
     * @return float Value of the stock
     */
    public function getStockValue()
    {
    }
    /**
     * For a given employee, gets the warehouse(s) he/she manages.
     *
     * @param int $id_employee Manager ID
     *
     * @return array ids_warehouse Ids of the warehouses
     */
    public static function getWarehousesByEmployee($id_employee)
    {
    }
    /**
     * For a given product, returns the warehouses it is stored in.
     *
     * @param int $id_product Product Id
     * @param int $id_product_attribute Optional, Product Attribute Id - 0 by default (no attribues)
     *
     * @return array Warehouses Ids and names
     */
    public static function getWarehousesByProductId($id_product, $id_product_attribute = 0)
    {
    }
    /**
     * For a given $id_warehouse, returns its name.
     *
     * @param int $id_warehouse Warehouse Id
     *
     * @return string Name
     */
    public static function getWarehouseNameById($id_warehouse)
    {
    }
    /**
     * For a given pack, returns the warehouse it can be shipped from.
     *
     * @param int $id_product
     *
     * @return array|bool id_warehouse or false
     */
    public static function getPackWarehouses($id_product, $id_shop = \null)
    {
    }
    public function resetStockAvailable()
    {
    }
    /*********************************\
     *
     * Webservices Specific Methods
     *
     *********************************/
    /**
     * Webservice : gets the value of the warehouse.
     *
     * @return float
     */
    public function getWsStockValue()
    {
    }
    /**
     * Webservice : gets the ids stock associated to this warehouse.
     *
     * @return array
     */
    public function getWsStocks()
    {
    }
    /**
     * Webservice : gets the ids shops associated to this warehouse.
     *
     * @return array
     */
    public function getWsShops()
    {
    }
    /**
     * Webservice : gets the ids carriers associated to this warehouse.
     *
     * @return array
     */
    public function getWsCarriers()
    {
    }
}
