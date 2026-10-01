<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Represents the products kept in warehouses.
 *
 * @deprecated since 9.0 and will be removed in 10.0, stock is now managed by new logic
 */
class StockCore extends \ObjectModel
{
    /** @var int identifier of the warehouse */
    public $id_warehouse;
    /** @var int identifier of the product */
    public $id_product;
    /** @var int identifier of the product attribute if necessary */
    public $id_product_attribute;
    /** @var string Product reference */
    public $reference;
    /** @var string Product EAN13 */
    public $ean13;
    /** @var string Product ISBN */
    public $isbn;
    /** @var string UPC */
    public $upc;
    /** @var string MPN */
    public $mpn;
    /** @var int the physical quantity in stock for the current product in the current warehouse */
    public $physical_quantity;
    /** @var int the usable quantity (for sale) of the current physical quantity */
    public $usable_quantity;
    /** @var float the unit price without tax forthe current product */
    public $price_te;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'stock', 'primary' => 'id_stock', 'fields' => ['id_warehouse' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_product_attribute' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'reference' => ['type' => self::TYPE_STRING, 'validate' => 'isReference', 'size' => 64], 'ean13' => ['type' => self::TYPE_STRING, 'validate' => 'isEan13', 'size' => 13], 'isbn' => ['type' => self::TYPE_STRING, 'validate' => 'isIsbn', 'size' => 32], 'upc' => ['type' => self::TYPE_STRING, 'validate' => 'isUpc', 'size' => 12], 'mpn' => ['type' => self::TYPE_STRING, 'validate' => 'isMpn', 'size' => 40], 'physical_quantity' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => \true], 'usable_quantity' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => \true], 'price_te' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true]]];
    /**
     * @see ObjectModel::$webserviceParameters
     */
    protected $webserviceParameters = ['fields' => ['id_warehouse' => ['xlink_resource' => 'warehouses'], 'id_product' => ['xlink_resource' => 'products'], 'id_product_attribute' => ['xlink_resource' => 'combinations'], 'real_quantity' => ['getter' => 'getWsRealQuantity', 'setter' => \false]], 'hidden_fields' => []];
    /**
     * @see ObjectModel::update()
     */
    public function update($null_values = \false)
    {
    }
    /**
     * @see ObjectModel::add()
     */
    public function add($autodate = \true, $null_values = \false)
    {
    }
    /**
     * Gets reference, ean13 , isbn, mpn and upc of the current product
     * Stores it in stock for stock_mvt integrity and history purposes.
     */
    protected function getProductInformations()
    {
    }
    /**
     * Webservice : used to get the real quantity of a product.
     */
    public function getWsRealQuantity()
    {
    }
    public static function deleteStockByIds($id_product = \null, $id_product_attribute = \null)
    {
    }
    public static function productIsPresentInStock($id_product = 0, $id_product_attribute = 0, $id_warehouse = 0)
    {
    }
}
