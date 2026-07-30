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
 * Class CartRuleCore.
 */
class CartRuleCore extends \ObjectModel
{
    /* Filters used when retrieving the cart rules applied to a cart of when calculating the value of a reduction */
    public const FILTER_ACTION_ALL = 1;
    public const FILTER_ACTION_SHIPPING = 2;
    public const FILTER_ACTION_REDUCTION = 3;
    public const FILTER_ACTION_GIFT = 4;
    public const FILTER_ACTION_ALL_NOCAP = 5;
    public const BO_ORDER_CODE_PREFIX = 'BO_ORDER_';
    /**
     * This variable controls that a free gift is offered only once, even when multi-shippping is activated
     * and the same product is delivered in both addresses.
     *
     * @var array
     */
    protected static $only_one_gift = [];
    public $id;
    public $name;
    public $id_customer;
    /**
     * @var string|null
     */
    public $date_from;
    /**
     * @var string|null
     */
    public $date_to;
    public $description;
    public $quantity = 1;
    public $quantity_per_user = 1;
    public $priority = 1;
    /** @var bool */
    public $partial_use = \true;
    public $code;
    public $minimum_amount;
    /** @var bool */
    public $minimum_amount_tax;
    public $minimum_amount_currency;
    /** @var bool */
    public $minimum_amount_shipping;
    /** @var bool */
    public $country_restriction;
    /** @var bool */
    public $carrier_restriction;
    /** @var bool */
    public $group_restriction;
    /** @var bool */
    public $cart_rule_restriction;
    /** @var bool */
    public $product_restriction;
    /** @var bool */
    public $shop_restriction;
    /** @var bool */
    public $free_shipping;
    public $reduction_percent;
    public $reduction_amount;
    /**
     * @var bool is this voucher value tax included (false = tax excluded value)
     */
    public $reduction_tax;
    /** @var int */
    public $reduction_currency;
    public $reduction_product;
    /** @var bool */
    public $reduction_exclude_special;
    public $gift_product;
    public $gift_product_attribute;
    /** @var bool */
    public $highlight;
    /** @var bool */
    public $active = \true;
    public $date_add;
    public $date_upd;
    protected static $cartAmountCache = [];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'cart_rule', 'primary' => 'id_cart_rule', 'multilang' => \true, 'fields' => [
        'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'date_from' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => \true],
        'date_to' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => \true],
        'description' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 4194303],
        'quantity' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'quantity_per_user' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'priority' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'partial_use' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'code' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 254],
        'minimum_amount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
        'minimum_amount_tax' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'minimum_amount_currency' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
        'minimum_amount_shipping' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'country_restriction' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'carrier_restriction' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'group_restriction' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'cart_rule_restriction' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'product_restriction' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'shop_restriction' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'free_shipping' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'reduction_percent' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPercentage'],
        'reduction_amount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
        'reduction_tax' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'reduction_currency' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'reduction_product' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
        'reduction_exclude_special' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'gift_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'gift_product_attribute' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'highlight' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_HTML, 'lang' => \true, 'required' => \true, 'size' => 254],
    ]];
    public static function resetStaticCache()
    {
    }
    /**
     * Adds current CartRule as a new Object to the database.
     *
     * @param bool $autodate Automatically set `date_upd` and `date_add` columns
     * @param bool $null_values Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the CartRule has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autodate = \true, $null_values = \false)
    {
    }
    /**
     * Updates the current object in the database.
     *
     * @param bool $null_values Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the CartRule has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($null_values = \false)
    {
    }
    /**
     * Deletes current CartRule from the database.
     *
     * @return bool True if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Copy conditions from one CartRule to another.
     *
     * @param int $id_cart_rule_source Source CartRule ID
     * @param int $id_cart_rule_destination Destination CartRule ID
     */
    public static function copyConditions($id_cart_rule_source, $id_cart_rule_destination)
    {
    }
    /**
     * Retrieves the CartRule ID associated with the given voucher code.
     *
     * @param string $code Voucher code
     *
     * @return int|bool CartRule ID
     *                  false if not found
     */
    public static function getIdByCode($code)
    {
    }
    /**
     * Check if some cart rules exists today for the given customer.
     *
     * @param int $idCustomer
     *
     * @return bool
     */
    public static function haveCartRuleToday($idCustomer)
    {
    }
    /**
     * Get CartRules for the given Customer.
     *
     * @param int $id_lang Language ID
     * @param int $id_customer Customer ID
     * @param bool $active Active vouchers only
     * @param bool $includeGeneric Include generic vouchers that don't have specific customer
     * @param bool $inStock Vouchers that have "total quantity" remaining
     * @param CartCore|null $cart Cart
     * @param bool $free_shipping_only Free shipping only
     * @param bool $highlight_only Highlighted vouchers only
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getCustomerCartRules($id_lang, $id_customer, $active = \false, $includeGeneric = \true, $inStock = \false, \CartCore $cart = \null, $free_shipping_only = \false, $highlight_only = \false)
    {
    }
    /**
     * Get all (inactive too) CartRules for a given customer
     *
     * @param int $customerId
     *
     * @return array
     */
    public static function getAllCustomerCartRules(int $customerId): array
    {
    }
    public static function getCustomerHighlightedDiscounts($languageId, $customerId, \CartCore $cart)
    {
    }
    /**
     * Check if the CartRule has been used by the given Customer.
     *
     * @param int $id_customer Customer ID
     *
     * @return bool Indicates if the CartRule has been used by a Customer
     *              The Cart must have been converted into an Order, otherwise it doesn't count
     */
    public function usedByCustomer($id_customer)
    {
    }
    /**
     * Check if the CartRule exists.
     *
     * @param string $code CartRule code
     *
     * @return bool Indicates whether the CartRule can be found
     */
    public static function cartRuleExists($code)
    {
    }
    /**
     * Delete CartRules by Customer ID.
     *
     * @param int $id_customer Customer ID
     *
     * @return bool Indicates if the CartRules were successfully deleted
     */
    public static function deleteByIdCustomer($id_customer)
    {
    }
    /**
     * @return array
     */
    public function getProductRuleGroups()
    {
    }
    /**
     * @param int $id_product_rule_group
     *
     * @return array ('type' => ? , 'values' => ?)
     */
    public function getProductRules($id_product_rule_group)
    {
    }
    /**
     * Check if this CartRule can be applied.
     *
     * @param Context $context Context instance
     * @param bool $alreadyInCart Check if the voucher is already on the cart
     * @param bool $display_error Display error
     * @param bool $check_carrier
     * @param bool $useOrderPrices
     *
     * @return bool|mixed|string
     */
    public function checkValidity(\Context $context, $alreadyInCart = \false, $display_error = \true, $check_carrier = \true, $useOrderPrices = \false)
    {
    }
    /**
     * Checks if the products chosen by the customer are usable with the cart rule.
     *
     * @param CartCore $cart
     * @param bool $returnProducts [default=false]
     *                             If true, this method will return an array of eligible products.
     *                             Otherwise, it returns TRUE on success and string|false on errors (depending on the value of $displayError)
     * @param bool $displayError [default=false]
     *                           If true, this method will return an error message instead of FALSE on errors.
     *                           Otherwise, it returns FALSE on errors
     * @param bool $alreadyInCart
     *
     * @return array|bool|string
     *
     * @throws PrestaShopDatabaseException
     */
    public function checkProductRestrictionsFromCart(\CartCore $cart, $returnProducts = \false, $displayError = \true, $alreadyInCart = \false)
    {
    }
    /**
     * The reduction value is POSITIVE.
     *
     * @param bool $use_tax Apply taxes
     * @param Context $context Context instance
     * @param bool $use_cache Allow using cache to avoid multiple free gift using multishipping
     *
     * @return float|int|string
     */
    public function getContextualValue($use_tax, \Context $context = \null, $filter = \null, $package = \null, $use_cache = \true)
    {
    }
    /**
     * Make sure caches are empty
     * Must be called before calling multiple time getContextualValue().
     */
    public static function cleanCache()
    {
    }
    /**
     * Get CartRule combinations.
     *
     * @param int $offset Offset
     * @param int $limit Limit
     * @param string $search Search query
     *
     * @return array CartRule search results
     */
    protected function getCartRuleCombinations($offset = \null, $limit = \null, $search = '')
    {
    }
    /**
     * Get associated restrictions.
     *
     * @param string $type Restriction type
     *                     Can be one of the following:
     *                     - country
     *                     - carrier
     *                     - group
     *                     - cart_rule
     *                     - shop
     * @param bool $active_only Only return active restrictions
     * @param bool $i18n Join with associated language table
     * @param int $offset Search offset
     * @param int $limit Search results limit
     * @param string $search_cart_rule_name CartRule name to search for
     *
     * @return array|bool Array with DB rows of requested type
     *
     * @throws PrestaShopDatabaseException
     */
    public function getAssociatedRestrictions($type, $active_only, $i18n, $offset = \null, $limit = \null, $search_cart_rule_name = '')
    {
    }
    /**
     * Automatically add this CartRule to the Cart.
     *
     * @param Context|null $context Context instance
     * @param bool $useOrderPrices
     */
    public static function autoAddToCart(\Context $context = \null, bool $useOrderPrices = \false)
    {
    }
    /**
     * Automatically remove this CartRule from the Cart.
     *
     * @param Context|null $context Context instance
     * @param bool $useOrderPrice
     *
     * @return array Error messages
     */
    public static function autoRemoveFromCart(\Context $context = \null, bool $useOrderPrice = \false)
    {
    }
    /**
     * Check if the CartRule feature is active
     * It becomes active after adding the first CartRule to the store.
     *
     * @return bool Indicates whether the CartRule feature is active
     */
    public static function isFeatureActive()
    {
    }
    /**
     * CartRule cleanup
     * When an entity associated to a product rule
     * (product, category, attribute, supplier, manufacturer...)
     * is deleted, the product rules must be updated.
     *
     * @param string $type Entity type
     *                     Can be one of the following:
     *                     - products
     *                     - categories
     *                     - attributes
     *                     - manufacturers
     *                     - suppliers
     * @param array|int $list Entities
     *
     * @return bool Indicates whether the cleanup was successful
     */
    public static function cleanProductRuleIntegrity($type, $list)
    {
    }
    /**
     * Get CartRules by voucher code.
     *
     * @param string $name Name of voucher code
     * @param int $id_lang Language ID
     * @param bool $extended Also search by voucher name
     *
     * @return array Result from database
     */
    public static function getCartsRuleByCode($name, $id_lang, $extended = \false)
    {
    }
    /**
     * CartRules compare function to use the Product and the rules.
     *
     * @param array $products List of Products from the cart,
     * @param array $eligibleProducts List of Product eligible for rules,
     * @param string $ruleType name of the rule,
     *
     * @return array Product selected who are eligible
     */
    protected function filterProducts($products, $eligibleProducts, $ruleType)
    {
    }
}
