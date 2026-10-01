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
class GroupCore extends \ObjectModel
{
    public $id;
    /** @var string|array<int, string> */
    public $name;
    /** @var string Reduction */
    public $reduction;
    /** @var int Price display method (tax inc/tax exc) */
    public $price_display_method;
    /** @var bool Show prices */
    public $show_prices = \true;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'group', 'primary' => 'id_group', 'multilang' => \true, 'fields' => [
        'reduction' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
        'price_display_method' => ['type' => self::TYPE_INT, 'validate' => 'isPriceDisplayMethod', 'required' => \true],
        'show_prices' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 32],
    ]];
    protected static $cache_reduction = [];
    protected static $group_price_display_method = [];
    protected static $ps_group_feature_active = \null;
    protected static $groups = [];
    protected static $ps_unidentified_group = \null;
    protected static $ps_customer_group = \null;
    protected $webserviceParameters = [];
    public const PRICE_DISPLAY_METHOD_TAX_INCL = 0;
    public const PRICE_DISPLAY_METHOD_TAX_EXCL = 1;
    public function __construct($id = \null, $id_lang = \null, $id_shop = \null)
    {
    }
    /**
     * WARNING: For testing only. Do NOT rely on this method, it may be removed at any time.
     */
    public static function clearCachedValues()
    {
    }
    public static function getGroups($id_lang, $id_shop = \false)
    {
    }
    public function getCustomers($count = \false, $start = 0, $limit = 0, $shop_filtering = \false)
    {
    }
    public static function getReduction($id_customer = \null)
    {
    }
    public static function getReductionByIdGroup($id_group)
    {
    }
    /**
     * Returns price display method for a group (i.e. price should be including tax or not).
     *
     * @param int $id_group
     *
     * @return int Returns 0 (PS_TAX_INC) if tax should be included, otherwise 1 (PS_TAX_EXC) - tax should be excluded
     */
    public static function getPriceDisplayMethod($id_group)
    {
    }
    /**
     * Returns default price display method, i.e. for the 'Customers' group.
     *
     * @see getPriceDisplayMethod()
     *
     * @return int Returns 0 (PS_TAX_INC) if tax should be included, otherwise 1 (PS_TAX_EXC) - tax should be excluded
     */
    public static function getDefaultPriceDisplayMethod()
    {
    }
    public function add($autodate = \true, $null_values = \false)
    {
    }
    public function update($autodate = \true, $null_values = \false)
    {
    }
    public function delete()
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
     * This method is allow to know if there are other groups than the default ones.
     *
     * @since 1.5.0.1
     *
     * @param string|null $table Name of table linked to entity
     * @param bool $has_active_column True if the table has an active column
     *
     * @return bool
     */
    public static function isCurrentlyUsed($table = \null, $has_active_column = \false)
    {
    }
    /**
     * Truncate all modules restrictions for the group.
     *
     * @param int $id_group
     *
     * @return bool
     */
    public static function truncateModulesRestrictions($id_group)
    {
    }
    /**
     * Truncate all restrictions by module.
     *
     * @param int $id_module
     *
     * @return bool
     */
    public static function truncateRestrictionsByModule($id_module)
    {
    }
    /**
     * Adding restrictions modules to the group with id $id_group.
     *
     * @param int $id_group
     * @param array $modules
     * @param array $shops
     *
     * @return bool
     */
    public static function addModulesRestrictions($id_group, $modules, $shops = [1])
    {
    }
    /**
     * Add restrictions for a new module.
     * We authorize every groups to the new module.
     *
     * @param int $id_module
     * @param array $shops
     *
     * @return bool
     */
    public static function addRestrictionsForModule($id_module, $shops = [1])
    {
    }
    /**
     * Return current group object
     * Use context.
     *
     * @return Group Group object
     */
    public static function getCurrent()
    {
    }
    public static function getAllGroupIds(): array
    {
    }
    /**
     * Light back office search for Group.
     *
     * @param string $query Searched string
     *
     * @return array Corresponding groups
     */
    public static function searchByName($query)
    {
    }
}
