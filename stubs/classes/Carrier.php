<?php

class CarrierCore extends \ObjectModel
{
    /**
     * getCarriers method filter.
     */
    public const PS_CARRIERS_ONLY = 1;
    public const CARRIERS_MODULE = 2;
    public const CARRIERS_MODULE_NEED_RANGE = 3;
    public const PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE = 4;
    public const ALL_CARRIERS = 5;
    public const SHIPPING_METHOD_DEFAULT = 0;
    public const SHIPPING_METHOD_WEIGHT = 1;
    public const SHIPPING_METHOD_PRICE = 2;
    public const SHIPPING_METHOD_FREE = 3;
    public const SHIPPING_PRICE_EXCEPTION = 0;
    public const SHIPPING_WEIGHT_EXCEPTION = 1;
    public const SHIPPING_SIZE_EXCEPTION = 2;
    public const SORT_BY_PRICE = 0;
    public const SORT_BY_POSITION = 1;
    public const SORT_BY_ASC = 0;
    public const SORT_BY_DESC = 1;
    /** @var int common id for carrier historization */
    public $id_reference;
    /** @var string Name */
    public $name;
    /** @var string URL with a '@' for */
    public $url;
    /** @var string Delay needed to deliver customer */
    public $delay;
    /** @var bool Carrier statuts */
    public $active = \true;
    /** @var bool True if carrier has been deleted (staying in database as deleted) */
    public $deleted = \false;
    /** @var bool True if extra shipping handling cost should be applied to this Carrier */
    public $shipping_handling = \true;
    /** @var bool Behavior for out-of-range weights: true to disable carrier, false to apply the cost of the highest defined range */
    public $range_behavior;
    /** @var bool Carrier module */
    public $is_module;
    /** @var bool Free carrier */
    public $is_free = \false;
    /** @var int Shipping cost calculation method: by weight or by price or free */
    public $shipping_method = 0;
    /**
     * @var bool True if external module calculates shipping cost
     *
     * @see Cart::getPackageShippingCostFromModule()
     */
    public $shipping_external = \false;
    /** @var string Name of external module responsible for this Carrier */
    public $external_module_name = \null;
    /**
     * @var bool True if module needs core range-based shipping cost to calculate final cost
     *
     * @see Cart::getPackageShippingCostFromModule()
     */
    public $need_range = \false;
    /** @var int Position */
    public $position;
    /** @var int maximum package width managed by the transporter */
    public $max_width;
    /** @var int maximum package height managed by the transporter */
    public $max_height;
    /** @var int maximum package deep managed by the transporter */
    public $max_depth;
    /** @var int maximum package weight managed by the transporter */
    public $max_weight;
    /** @var int grade of the shipping delay (0 for longest, 9 for shortest) */
    public $grade;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'carrier', 'primary' => 'id_carrier', 'multilang' => \true, 'multilang_shop' => \true, 'fields' => [
        /* Classic fields */
        'id_reference' => ['type' => self::TYPE_INT],
        'name' => ['type' => self::TYPE_STRING, 'validate' => 'isCarrierName', 'required' => \true, 'size' => 64],
        'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => \true],
        'is_free' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'url' => ['type' => self::TYPE_STRING, 'validate' => 'isAbsoluteUrl'],
        'shipping_handling' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'shipping_external' => ['type' => self::TYPE_BOOL],
        'range_behavior' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'shipping_method' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'max_width' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'max_height' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'max_depth' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'max_weight' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
        'grade' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'size' => 1],
        'external_module_name' => ['type' => self::TYPE_STRING, 'size' => 64],
        'is_module' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'need_range' => ['type' => self::TYPE_BOOL],
        'position' => ['type' => self::TYPE_INT],
        'deleted' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        /* Lang fields */
        'delay' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 512],
    ]];
    protected static $price_by_weight = [];
    protected static $price_by_weight2 = [];
    protected static $price_by_price = [];
    protected static $price_by_price2 = [];
    protected static $cache_tax_rule = [];
    protected $webserviceParameters = ['fields' => ['deleted' => [], 'is_module' => [], 'id_tax_rules_group' => ['getter' => 'getIdTaxRulesGroup', 'setter' => 'setTaxRulesGroup', 'xlink_resource' => ['resourceName' => 'tax_rule_groups']]]];
    /**
     * CarrierCore constructor.
     *
     * @param int|null $id Carrier ID
     * @param int|null $id_lang Language ID
     */
    public function __construct($id = \null, $id_lang = \null)
    {
    }
    public static function resetStaticCache()
    {
    }
    /**
     * Adds current Carrier as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Whether the Carrier has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * @since 1.5.0
     * @see ObjectModel::delete()
     */
    public function delete()
    {
    }
    /**
     * Change carrier id in delivery prices when updating a carrier.
     *
     * @param int $id_old Old Carrier ID
     */
    public function setConfiguration($id_old)
    {
    }
    /**
     * Get delivery price for a given order.
     *
     * @param float $total_weight Total order weight
     * @param int $id_zone Zone ID (for customer delivery address)
     *
     * @return float|bool Delivery price, false if not possible
     */
    public function getDeliveryPriceByWeight($total_weight, $id_zone)
    {
    }
    /**
     * Check if the carrier is available for a given weight and zone
     *
     * @param int $id_carrier Carrier ID
     * @param float $total_weight Total weight
     * @param int $id_zone Zone ID
     *
     * @return bool true if carrier is available
     */
    public static function checkDeliveryPriceByWeight($id_carrier, $total_weight, $id_zone)
    {
    }
    /**
     * Get maximum delivery price when range weight is used.
     *
     * @param int $id_zone Zone ID
     *
     * @return false|string|null Maximum delivery price
     */
    public function getMaxDeliveryPriceByWeight($id_zone)
    {
    }
    /**
     * Get delivery price for a given order by total order price MINUS shipping costs.
     *
     * @param float $order_total Order total to pay
     * @param int $id_zone Zone id (for customer delivery address)
     * @param int|null $id_currency Currency ID
     *
     * @return float Maximum delivery price
     */
    public function getDeliveryPriceByPrice($order_total, $id_zone, $id_currency = \null)
    {
    }
    /**
     * Check if the carrier is available for a given order total, currency and zone
     *
     * @param int $id_carrier Carrier ID
     * @param float $order_total Order total to pay
     * @param int $id_zone Zone id (for customer delivery address)
     * @param int|null $id_currency Currency ID
     *
     * @return bool true if carrier is available
     */
    public static function checkDeliveryPriceByPrice($id_carrier, $order_total, $id_zone, $id_currency = \null)
    {
    }
    /**
     * Get maximum delivery price by order total MINUS shipping costs.
     *
     * @param int $id_zone Zone ID
     *
     * @return false|string Maximum delivery price
     */
    public function getMaxDeliveryPriceByPrice($id_zone)
    {
    }
    /**
     * Get delivery prices for a given shipping method (price/weight).
     *
     * @param string $range_table Table name (price or weight)
     * @param int $id_carrier Carrier ID
     *
     * @return array Delivery prices
     */
    public static function getDeliveryPriceByRanges($range_table, $id_carrier)
    {
    }
    /**
     * Get all carriers in a given language.
     *
     * @param int $id_lang Language id
     * @param int $modules_filters Possible values:
     *                             - PS_CARRIERS_ONLY
     *                             - CARRIERS_MODULE
     *                             - CARRIERS_MODULE_NEED_RANGE
     *                             - PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE
     *                             - ALL_CARRIERS
     * @param bool $active Returns only active carriers when true
     * @param array|string|null $ids_group
     *
     * @return array Carriers
     */
    public static function getCarriers($id_lang, $active = \false, $delete = \false, $id_zone = \false, $ids_group = \null, $modules_filters = self::PS_CARRIERS_ONLY)
    {
    }
    /**
     * Get most used Tax rules group.
     *
     * @return false|string|null Most used Tax rules group ID
     */
    public static function getIdTaxRulesGroupMostUsed()
    {
    }
    /**
     * Get the countries to which can be delivered.
     *
     * @param int $id_lang Language ID
     * @param bool $active_countries Only return active countries when true
     * @param bool $active_carriers Only return active carriers when true
     * @param int|null $contain_states Only return countries with states
     *
     * @return array Countries to which can be delivered
     */
    public static function getDeliveredCountries($id_lang, $active_countries = \false, $active_carriers = \false, $contain_states = \null)
    {
    }
    /**
     * Return the default carrier to use.
     *
     * @param array $carriers Carriers
     * @param int $default_carrier The last selected Carrier ID
     *
     * @return number the id of the default carrier
     */
    public static function getDefaultCarrierSelection($carriers, $default_carrier = 0)
    {
    }
    /**
     * Get available Carriers for Order.
     *
     * @param int $id_zone Zone ID
     * @param array|null $groups Group of the Customer
     * @param CartCore|null $cart Optional Cart object
     * @param array $error Contains an error message if an error occurs
     *
     * @return array Carriers for the order
     */
    public static function getCarriersForOrder($id_zone, $groups = \null, $cart = \null, &$error = [])
    {
    }
    public static function checkCarrierZone($id_carrier, $id_zone)
    {
    }
    /**
     * Get all zones.
     *
     * @return array Zones
     */
    public function getZones()
    {
    }
    /**
     * Get a specific zones.
     *
     * @return array Zone
     */
    public function getZone($id_zone)
    {
    }
    /**
     * Add zone.
     */
    public function addZone($id_zone)
    {
    }
    /**
     * Delete zone.
     */
    public function deleteZone($id_zone)
    {
    }
    /**
     * Gets a specific group.
     *
     * @since 1.5.0
     *
     * @return array Group
     */
    public function getGroups()
    {
    }
    /**
     * Clean delivery prices (weight/price).
     *
     * @param string $range_table Table name to clean (weight or price according to shipping method)
     *
     * @return bool Deletion result
     */
    public function deleteDeliveryPrice($range_table)
    {
    }
    /**
     * Add new delivery prices.
     *
     * @param array $price_list Prices list in multiple arrays (changed to array since 1.5.0)
     * @param bool $delete
     *
     * @return bool Insertion result
     */
    public function addDeliveryPrice($price_list, $delete = \false)
    {
    }
    /**
     * Copy old carrier informations when update carrier.
     *
     * @param int $old_id Old id carrier (copy from that id)
     */
    public function copyCarrierData($old_id)
    {
    }
    /**
     * Get carrier using the reference id.
     */
    public static function getCarrierByReference($id_reference, $id_lang = \null)
    {
    }
    /**
     * Check if Carrier is used (at least one order placed).
     *
     * @return int Order count for this carrier
     */
    public function isUsed()
    {
    }
    /**
     * Get shipping method of the carrier (free, weight or price).
     *
     * @return int Shipping method enumerator
     */
    public function getShippingMethod()
    {
    }
    /**
     * Get range table of carrier.
     *
     * @return bool|string Range table, false if not found
     */
    public function getRangeTable()
    {
    }
    /**
     * Get Range object, price or weight, depending on the shipping method given.
     *
     * @param int|bool $shipping_method Shipping method enumerator
     *                                  Use false in order to let this method find the correct one
     *
     * @return bool|RangePrice|RangeWeight
     */
    public function getRangeObject($shipping_method = \false)
    {
    }
    /**
     * Get range suffix.
     *
     * @param Currency|null $currency Currency
     *
     * @return string Currency sign in suffix to use for the range
     */
    public function getRangeSuffix($currency = \null)
    {
    }
    /**
     * Get TaxRulesGroup ID for this Carrier.
     *
     * @param Context|null $context Context
     *
     * @return int TaxrulesGroup ID
     */
    public function getIdTaxRulesGroup(\Context $context = \null)
    {
    }
    /**
     * Get TaxRulesGroup ID for a given Carrier.
     *
     * @param int $id_carrier Carrier ID
     * @param Context|null $context Context
     *
     * @return int TaxRulesGroup ID
     *             false if not found
     */
    public static function getIdTaxRulesGroupByIdCarrier($id_carrier, \Context $context = \null)
    {
    }
    /**
     * Set TaxRulesGroup.
     *
     * @param int $id_tax_rules_group Set the TaxRulesGroup with the given ID
     *                                as this Carrier's TaxRulesGroup
     * @param bool $all_shops True if this should be done for all shops
     *
     * @return bool Whether the TaxRulesGroup has been succesfully set
     *              for this Carrier in this Shop or all given Shops
     */
    public function setTaxRulesGroup($id_tax_rules_group, $all_shops = \false)
    {
    }
    /**
     * Delete TaxRulesGroup from this Carrier.
     *
     * @param array|null $shops Shops
     *
     * @return bool Whether the TaxRulesGroup has been successfully removed from this Carrier
     */
    public function deleteTaxRulesGroup(array $shops = \null)
    {
    }
    /**
     * Returns the Tax rates associated to the Carrier.
     *
     * @since 1.5
     *
     * @param Address $address Address optional
     *
     * @return float Total Tax rate for this Carrier
     */
    public function getTaxesRate(\Address $address = \null)
    {
    }
    /**
     * Returns the taxes calculator associated to the carrier.
     *
     * @since 1.5
     *
     * @param Address $address Address
     *
     * @return TaxCalculator|AverageTaxOfProductsTaxCalculator Tax calculator object
     */
    public function getTaxCalculator(\Address $address, $id_order = \null, $use_average_tax_of_products = \false)
    {
    }
    /**
     * This tricky method generates a SQL clause to check if ranged data are overloaded by multishop.
     *
     * @since 1.5.0
     *
     * @param string $range_table Range table
     *
     * @return string SQL quoer to get the delivery range table in this Shop(Group)
     */
    public static function sqlDeliveryRangeShop($range_table, $alias = 'd')
    {
    }
    /**
     * Moves a carrier.
     *
     * @since 1.5.0
     *
     * @param bool $way Up (1) or Down (0)
     * @param int|null $position Current position of the Carrier
     *
     * @return bool Whether the update was successful
     */
    public function updatePosition($way, $position)
    {
    }
    /**
     * Reorder Carrier positions
     * Called after deleting a Carrier.
     *
     * @since 1.5.0
     *
     * @return bool $return
     */
    public static function cleanPositions()
    {
    }
    /**
     * Gets the highest carrier position.
     *
     * @since 1.5.0
     *
     * @return int $position
     */
    public static function getHigherPosition()
    {
    }
    /**
     * For a given {product, warehouse}, gets the carrier available.
     *
     * @since 1.5.0
     *
     * @param Product $product The id of the product, or an array with at least the package size and weight
     * @param int|null $id_warehouse Warehouse ID
     * @param int|null $id_address_delivery Delivery Address ID
     * @param int|null$id_shop Shop ID
     * @param CartCore|null $cart Cart object
     * @param array|null $error contain an error message if an error occurs
     *
     * @return array Available Carriers
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getAvailableCarrierList(\Product $product, $id_warehouse, $id_address_delivery = \null, $id_shop = \null, $cart = \null, &$error = [])
    {
    }
    /**
     * Assign one (ore more) group to all carriers.
     *
     * @since 1.5.0
     *
     * @param int|array $id_group_list Group ID or array of Group IDs
     * @param array $exception List of Carrier IDs to ignore
     *
     * @return bool
     */
    public static function assignGroupToAllCarriers($id_group_list, $exception = [])
    {
    }
    /**
     * Set Carrier Groups.
     *
     * @param array $groups Carrier Groups
     * @param bool $delete Delete all previously Carrier Groups which
     *                     were linked to this Carrier
     *
     * @return bool Whether the Carrier Groups have been successfully set
     */
    public function setGroups($groups, $delete = \true)
    {
    }
}
