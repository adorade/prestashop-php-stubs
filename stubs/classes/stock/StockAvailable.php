<?php

/**
 * Represents quantities available
 * It is either synchronized with Stock or manualy set by the seller.
 *
 * @since 1.5.0
 */
class StockAvailableCore extends \ObjectModel
{
    /** @var int identifier of the current product */
    public $id_product;
    /** @var int identifier of product attribute if necessary */
    public $id_product_attribute;
    /** @var int the shop associated to the current product and corresponding quantity */
    public $id_shop;
    /** @var int the group shop associated to the current product and corresponding quantity */
    public $id_shop_group;
    /** @var int the quantity available for sale */
    public $quantity = 0;
    /**
     * @deprecated since 1.7.8
     * This property was only relevant to advanced stock management and that feature is not maintained anymore
     *
     * @var bool determine if the available stock value depends on physical stock
     */
    public $depends_on_stock = \false;
    /**
     * Determine if a product is out of stock - it was previously in Product class
     *  - O Deny orders
     *  - 1 Allow orders
     *  - 2 Use global setting
     *
     * @var int
     */
    public $out_of_stock = 0;
    /** @var string the location of the stock for this product / combination */
    public $location = '';
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'stock_available', 'primary' => 'id_stock_available', 'fields' => ['id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_product_attribute' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_shop_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'quantity' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => \true, 'range' => ['min' => \PrestaShop\PrestaShop\Core\Domain\Product\Stock\StockSettings::INT_32_MAX_NEGATIVE, 'max' => \PrestaShop\PrestaShop\Core\Domain\Product\Stock\StockSettings::INT_32_MAX_POSITIVE]], 'depends_on_stock' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => \true], 'out_of_stock' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => \true], 'location' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255]]];
    /**
     * @see ObjectModel::$webserviceParameters
     */
    protected $webserviceParameters = ['fields' => ['id_product' => ['xlink_resource' => 'products'], 'id_product_attribute' => ['xlink_resource' => 'combinations'], 'id_shop' => ['xlink_resource' => 'shops'], 'id_shop_group' => ['xlink_resource' => 'shop_groups']], 'hidden_fields' => [], 'objectMethods' => ['add' => 'addWs', 'update' => 'updateWs']];
    /**
     * @return bool
     */
    public function updateWs()
    {
    }
    public static function getStockAvailableIdByProductId($id_product, $id_product_attribute = \null, $id_shop = \null)
    {
    }
    /**
     * For a given id_product, synchronizes StockAvailable::quantity with Stock::usable_quantity.
     *
     * @param int $id_product
     */
    public static function synchronize($id_product, $order_id_shop = \null)
    {
    }
    /**
     * For a given id_product, sets if stock available depends on stock.
     *
     * @param int $id_product
     * @param bool $depends_on_stock Optional : true by default
     * @param int $id_shop Optional : gets context by default
     */
    public static function setProductDependsOnStock($id_product, $depends_on_stock = \true, $id_shop = \null, $id_product_attribute = 0)
    {
    }
    /**
     * For a given id_product, sets if product is available out of stocks.
     *
     * @param int $id_product
     * @param int|bool $out_of_stock Optional false by default
     * @param int|null $id_shop Optional gets context by default
     * @param int $id_product_attribute
     */
    public static function setProductOutOfStock($id_product, $out_of_stock = \false, $id_shop = \null, $id_product_attribute = 0)
    {
    }
    /**
     * @param int $id_product
     * @param string $location
     * @param int $id_shop Optional
     * @param int $id_product_attribute Optional
     *
     * @return void
     *
     * @throws PrestaShopDatabaseException
     */
    public static function setLocation($id_product, $location, $id_shop = \null, $id_product_attribute = 0)
    {
    }
    /**
     * For a given id_product and id_product_attribute, gets its stock available.
     *
     * @param int $id_product
     * @param int $id_product_attribute Optional
     * @param int $id_shop Optional : gets context by default
     *
     * @return int Quantity
     */
    public static function getQuantityAvailableByProduct($id_product = \null, $id_product_attribute = \null, $id_shop = \null)
    {
    }
    /**
     * Upgrades total_quantity_available after having saved.
     *
     * @see ObjectModel::add()
     */
    public function add($autodate = \true, $null_values = \false)
    {
    }
    /**
     * Upgrades total_quantity_available after having update.
     *
     * @see ObjectModel::update()
     */
    public function update($null_values = \false)
    {
    }
    /**
     * Upgrades total_quantity_available after having saved.
     *
     * @see StockAvailableCore::update()
     * @see StockAvailableCore::add()
     */
    public function postSave()
    {
    }
    /**
     * For a given id_product and id_product_attribute updates the quantity available
     * If $avoid_parent_pack_update is true, then packs containing the given product won't be updated.
     *
     * @param int $id_product
     * @param int $id_product_attribute Optional
     * @param int $delta_quantity The delta quantity to update
     * @param int $id_shop Optional
     * @param bool $add_movement Optional
     * @param array $params Optional
     */
    public static function updateQuantity($id_product, $id_product_attribute, $delta_quantity, $id_shop = \null, $add_movement = \false, $params = [])
    {
    }
    /**
     * For a given id_product and id_product_attribute sets the quantity available.
     *
     * @param int $id_product
     * @param int $id_product_attribute
     * @param int $quantity
     * @param int|null $id_shop
     * @param bool $add_movement
     *
     * @return bool|void
     */
    public static function setQuantity($id_product, $id_product_attribute, $quantity, $id_shop = \null, $add_movement = \true)
    {
    }
    /**
     * Removes a given product from the stock available.
     *
     * @param int $id_product
     * @param int|null $id_product_attribute Optional
     * @param Shop|int|null $shop Shop id or shop object Optional
     *
     * @return bool
     */
    public static function removeProductFromStockAvailable($id_product, $id_product_attribute = \null, $shop = \null)
    {
    }
    /**
     * Removes all product quantities from all a group of shops
     * If stocks are shared, remoe all old available quantities for all shops of the group
     * Else remove all available quantities for the current group.
     *
     * @param ShopGroup $shop_group the ShopGroup object
     */
    public static function resetProductFromStockAvailableByShopGroup(\ShopGroup $shop_group)
    {
    }
    /**
     * For a given product, tells if it depends on the physical (usable) stock.
     *
     * @param int $id_product
     * @param int $id_shop Optional : gets context if null @see Context::getContext()
     *
     * @return bool : depends on stock @see $depends_on_stock
     */
    public static function dependsOnStock($id_product, $id_shop = \null)
    {
    }
    /**
     * For a given product, get its "out of stock" flag.
     *
     * @param int $id_product
     * @param int|null $id_shop Optional : gets context if null @see Context::getContext()
     *
     * @return int|bool : depends on stock @see $depends_on_stock
     */
    public static function outOfStock($id_product, $id_shop = \null)
    {
    }
    /**
     * @param int $id_product
     * @param int|null $id_product_attribute Optional
     * @param int|null $id_shop Optional
     *
     * @return bool|string
     */
    public static function getLocation($id_product, $id_product_attribute = \null, $id_shop = \null)
    {
    }
    /**
     * Add an sql restriction for shops fields - specific to StockAvailable.
     *
     * @param DbQuery|string|null $sql Reference to the query object
     * @param Shop|int|null $shop Optional : The shop ID
     * @param string|null $alias Optional : The current table alias
     *
     * @return string|DbQuery DbQuery object or the sql restriction string
     */
    public static function addSqlShopRestriction($sql = \null, $shop = \null, $alias = \null)
    {
    }
    /**
     * Add sql params for shops fields - specific to StockAvailable.
     *
     * @param array $params Reference to the params array
     * @param int $id_shop Optional : The shop ID
     */
    public static function addSqlShopParams(&$params, $id_shop = \null)
    {
    }
    /**
     * Copies stock available content table.
     *
     * @param int $src_shop_id
     * @param int $dst_shop_id
     *
     * @return bool
     */
    public static function copyStockAvailableFromShopToShop($src_shop_id, $dst_shop_id)
    {
    }
}
