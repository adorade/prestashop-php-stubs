<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Defines stock movements
 *
 * @deprecated since 9.0 and will be removed in 10.0, this object model is no longer needed
 */
class StockMvtCore extends \ObjectModel
{
    public $id;
    /**
     * @var string The creation date of the movement
     */
    public $date_add;
    /**
     * @var int The employee id, responsible of the movement
     */
    public $id_employee;
    /**
     * @var string The first name of the employee responsible of the movement
     */
    public $employee_firstname;
    /**
     * @var string The last name of the employee responsible of the movement
     */
    public $employee_lastname;
    /**
     * @var int The stock id on wtich the movement is applied
     */
    public $id_stock;
    /**
     * @var int the quantity of product with is moved
     */
    public $physical_quantity;
    /**
     * @var int id of the movement reason assoiated to the movement
     */
    public $id_stock_mvt_reason;
    /**
     * @var int Used when the movement is due to a customer order
     */
    public $id_order = \null;
    /**
     * @var int detrmine if the movement is a positive or negative operation
     */
    public $sign;
    /**
     * @var int Used when the movement is due to a supplier order
     */
    public $id_supply_order = \null;
    /**
     * @var float Last value of the weighted-average method
     */
    public $last_wa = \null;
    /**
     * @var float Current value of the weighted-average method
     */
    public $current_wa = \null;
    /**
     * @var float The unit price without tax of the product associated to the movement
     */
    public $price_te;
    /**
     * @var int Refers to an other id_stock_mvt : used for LIFO/FIFO implementation in StockManager
     */
    public $referer;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'stock_mvt', 'primary' => 'id_stock_mvt', 'fields' => ['id_employee' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'employee_firstname' => ['type' => self::TYPE_STRING, 'validate' => 'isName', 'size' => 255], 'employee_lastname' => ['type' => self::TYPE_STRING, 'validate' => 'isName', 'size' => 255], 'id_stock' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'physical_quantity' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => \true], 'id_stock_mvt_reason' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_supply_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'sign' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => \true], 'last_wa' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'current_wa' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'], 'price_te' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'referer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => \true]]];
    protected $webserviceParameters = ['objectsNodeName' => 'stock_movements', 'objectNodeName' => 'stock_movement', 'fields' => ['id_employee' => ['xlink_resource' => 'employees'], 'id_stock' => ['xlink_resource' => 'stock'], 'id_stock_mvt_reason' => ['xlink_resource' => 'stock_movement_reasons'], 'id_order' => ['xlink_resource' => 'orders'], 'id_supply_order' => ['xlink_resource' => 'supply_order']]];
    /**
     * Gets the negative (decrements the stock) stock mvts that correspond to the given order, for :
     * the given product, in the given quantity.
     *
     * @param int $id_order
     * @param int $id_product
     * @param int $id_product_attribute Use 0 if the product does not have attributes
     * @param int $quantity
     * @param int $id_warehouse Optional
     *
     * @return array mvts
     */
    public static function getNegativeStockMvts($id_order, $id_product, $id_product_attribute, $quantity, $id_warehouse = \null)
    {
    }
    /**
     * For a given product, gets the last positive stock mvt.
     *
     * @param int $id_product
     * @param int $id_product_attribute Use 0 if the product does not have attributes
     *
     * @return bool|array
     */
    public static function getLastPositiveStockMvt($id_product, $id_product_attribute)
    {
    }
}
