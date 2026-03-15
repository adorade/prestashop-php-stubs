<?php

class SpecificPriceCore extends \ObjectModel
{
    public const ORDER_DEFAULT_FROM_QUANTITY = 1;
    public const ORDER_DEFAULT_DATE = '0000-00-00 00:00:00';
    public $id_product;
    public $id_specific_price_rule = 0;
    public $id_cart = 0;
    public $id_product_attribute;
    public $id_shop;
    public $id_shop_group;
    public $id_currency;
    public $id_country;
    public $id_group;
    public $id_customer;
    public $price;
    public $from_quantity;
    public $reduction;
    public $reduction_tax = 1;
    public $reduction_type;
    public $from;
    public $to;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'specific_price', 'primary' => 'id_specific_price', 'fields' => ['id_shop_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_cart' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_product_attribute' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_currency' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_specific_price_rule' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_country' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isNegativePrice', 'required' => \true], 'from_quantity' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => \true], 'reduction' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'reduction_tax' => ['type' => self::TYPE_INT, 'validate' => 'isBool', 'required' => \true], 'reduction_type' => ['type' => self::TYPE_STRING, 'validate' => 'isReductionType', 'required' => \true], 'from' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => \true], 'to' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => \true]]];
    protected $webserviceParameters = ['objectsNodeName' => 'specific_prices', 'objectNodeName' => 'specific_price', 'fields' => ['id_shop_group' => ['xlink_resource' => 'shop_groups'], 'id_shop' => ['xlink_resource' => 'shops', 'required' => \true], 'id_cart' => ['xlink_resource' => 'carts', 'required' => \true], 'id_product' => ['xlink_resource' => 'products', 'required' => \true], 'id_product_attribute' => ['xlink_resource' => 'product_attributes'], 'id_currency' => ['xlink_resource' => 'currencies', 'required' => \true], 'id_country' => ['xlink_resource' => 'countries', 'required' => \true], 'id_group' => ['xlink_resource' => 'groups', 'required' => \true], 'id_customer' => ['xlink_resource' => 'customers', 'required' => \true]]];
    /**
     * Local cache for getSpecificPrice function results.
     *
     * @var array
     */
    protected static $_specificPriceCache = [];
    /**
     * Local cache which stores if a product could have an associated specific price.
     *
     * @var array
     */
    protected static $_couldHaveSpecificPriceCache = [];
    /**
     * Store if the specific_price table contains any global rules in the productId columns
     * i.e. if there is a product_id == 0 somewhere in the specific_price table.
     *
     * @var bool|null
     */
    protected static $_hasGlobalProductRules = \null;
    /**
     * Local cache for the filterOutField function. It stores the different existing values in the specific_price table
     * for a given column name.
     *
     * @var array
     */
    protected static $_filterOutCache = [];
    /**
     * Local cache for getPriority function.
     *
     * @var array
     */
    protected static $_cache_priorities = [];
    /**
     * Local cache which stores if a given column name could have a value != 0 in the specific_price table
     * i.e. if columnName != 0 somewhere in the specific_price table.
     *
     * @var array
     */
    protected static $_no_specific_values = [];
    protected static $psQtyDiscountOnCombination = \null;
    public static function resetStaticCache()
    {
    }
    /**
     * Flush local cache.
     */
    public static function flushCache()
    {
    }
    public function add($autodate = \true, $nullValues = \false)
    {
    }
    public function update($null_values = \false)
    {
    }
    public function delete()
    {
    }
    public static function getByProductId($id_product, $id_product_attribute = \false, $id_cart = \false, $id_price_rule = \null)
    {
    }
    public static function deleteByIdCart($id_cart, $id_product = \false, $id_product_attribute = \false)
    {
    }
    public static function getIdsByProductId($id_product, $id_product_attribute = \false, $id_cart = 0)
    {
    }
    /**
     * score generation for quantity discount.
     */
    protected static function _getScoreQuery($id_product, $id_shop, $id_currency, $id_country, $id_group, $id_customer)
    {
    }
    public static function getPriority($id_product)
    {
    }
    /**
     * Remove or add a field value to a query if values are present in the database (cache friendly).
     *
     * @param string $field_name
     * @param int $field_value
     * @param int $threshold
     *
     * @return string
     *
     * @throws PrestaShopDatabaseException
     */
    protected static function filterOutField($field_name, $field_value, $threshold = 1000)
    {
    }
    /**
     * Remove or add useless fields value depending on the values in the database (cache friendly).
     *
     * @param int|null $id_product
     * @param int|null $id_product_attribute
     * @param int|null $id_cart
     * @param string|null $beginning
     * @param string|null $ending
     *
     * @return string
     */
    protected static function computeExtraConditions($id_product, $id_product_attribute, $id_customer, $id_cart, $beginning = \null, $ending = \null)
    {
    }
    protected static function formatIntInQuery($first_value, $second_value)
    {
    }
    /**
     * Check if the given product could have a specific price.
     *
     * @param int $idProduct
     *
     * @return bool
     */
    final protected static function couldHaveSpecificPrice($idProduct)
    {
    }
    /**
     * Compute the cache key by setting to 0 the fields which doesn't have any specific values in the DB.
     *
     * @param int $id_product
     * @param int $id_shop
     * @param int $id_currency
     * @param int $id_country
     * @param int $id_group
     * @param int $quantity
     * @param int $id_product_attribute
     * @param int $id_customer
     * @param int $id_cart
     * @param int $real_quantity
     *
     * @return string
     */
    final protected static function computeKey($id_product, $id_shop, $id_currency, $id_country, $id_group, $quantity, $id_product_attribute, $id_customer, $id_cart, $real_quantity)
    {
    }
    /**
     * Returns the specificPrice information related to a given productId and context.
     *
     * @param int $id_product
     * @param int $id_shop
     * @param int $id_currency
     * @param int $id_country
     * @param int $id_group
     * @param int $quantity
     * @param int $id_product_attribute
     * @param int $id_customer
     * @param int $id_cart
     * @param int $real_quantity
     *
     * @return array
     */
    public static function getSpecificPrice($id_product, $id_shop, $id_currency, $id_country, $id_group, $quantity, $id_product_attribute = \null, $id_customer = 0, $id_cart = 0, $real_quantity = 0)
    {
    }
    /**
     * @deprecated since 8.0 and will be removed in next major version.
     * @see SpecificPricePriorityUpdater::updateDefaultPriorities()
     *
     * @param array $priorities
     *
     * @return bool
     */
    public static function setPriorities($priorities)
    {
    }
    /**
     * Truncate the specific price priorities.
     *
     * @return bool
     */
    public static function deletePriorities()
    {
    }
    public static function setSpecificPriority($id_product, $priorities)
    {
    }
    public static function getQuantityDiscounts($id_product, $id_shop, $id_currency, $id_country, $id_group, $id_product_attribute = \null, $all_combinations = \false, $id_customer = 0)
    {
    }
    public static function getQuantityDiscount($id_product, $id_shop, $id_currency, $id_country, $id_group, $quantity, $id_product_attribute = \null, $id_customer = 0)
    {
    }
    public static function getProductIdByDate($id_shop, $id_currency, $id_country, $id_group, $beginning, $ending, $id_customer = 0, $with_combination_id = \false)
    {
    }
    /**
     * Delete a product from its id.
     *
     * @param int $id_product
     *
     * @return bool
     */
    public static function deleteByProductId($id_product)
    {
    }
    /**
     * Duplicate a product.
     *
     * @param bool|int $id_product The product ID to duplicate, false when duplicating the current product
     * @param array $combination_associations Associations between the ids of base combinations and their duplicates
     *
     * @return bool
     */
    public function duplicate($id_product = \false, array $combination_associations = []): bool
    {
    }
    /**
     * This method is allow to know if a feature is used or active.
     *
     * @since 1.5.0.1
     *
     * @return bool
     */
    public static function isFeatureActive()
    {
    }
    /**
     * Check if a specific price exists based on given parameters and return the specific rule id.
     *
     * @param int $id_product
     * @param int $id_product_attribute Set at 0 when the specific price was set for all attributes
     * @param int $id_shop Set at 0 when the specific price was set for all shops
     * @param int $id_group Set at 0 when the specific price was set for all groups
     * @param int $id_country Set at 0 when the specific price was set for all countries
     * @param int $id_currency Set at 0 when the specific price was set for all currencies
     * @param int $id_customer Set at 0 when the specific price was set for all customers
     * @param int $from_quantity The starting quantity for which the specific price is applied
     * @param string $from Date from which the specific price start. 0000-00-00 00:00:00 if no starting date
     * @param string $to Date from which the specific price end. 0000-00-00 00:00:00 if no ending date
     * @param bool $rule if a specific price rule (from specific_price_rule) was set or not
     * @param int|null $id_cart if a specific cart was set or not (default: null no additional check is performed)
     *
     * @return int The specific rule id, 0 if no corresponding rule found
     */
    public static function exists($id_product, $id_product_attribute, $id_shop, $id_group, $id_country, $id_currency, $id_customer, $from_quantity, $from, $to, $rule = \false, $id_cart = \null)
    {
    }
}
