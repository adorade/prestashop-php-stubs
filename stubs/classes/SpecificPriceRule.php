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
class SpecificPriceRuleCore extends \ObjectModel
{
    public $name;
    public $id_shop;
    public $id_currency;
    public $id_country;
    public $id_group;
    public $from_quantity;
    public $price;
    public $reduction;
    public $reduction_tax;
    public $reduction_type;
    public $from;
    public $to;
    protected static $rules_application_enable = \true;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'specific_price_rule', 'primary' => 'id_specific_price_rule', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => \true], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_country' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_currency' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'from_quantity' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => \true], 'price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isNegativePrice', 'required' => \true], 'reduction' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'reduction_tax' => ['type' => self::TYPE_INT, 'validate' => 'isBool', 'required' => \true], 'reduction_type' => ['type' => self::TYPE_STRING, 'validate' => 'isReductionType', 'required' => \true], 'from' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => \false], 'to' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => \false]]];
    protected $webserviceParameters = ['objectsNodeName' => 'specific_price_rules', 'objectNodeName' => 'specific_price_rule', 'fields' => ['id_shop' => ['xlink_resource' => 'shops', 'required' => \true], 'id_country' => ['xlink_resource' => 'countries', 'required' => \true], 'id_currency' => ['xlink_resource' => 'currencies', 'required' => \true], 'id_group' => ['xlink_resource' => 'groups', 'required' => \true]]];
    /**
     * @return bool
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    public function deleteConditions()
    {
    }
    public static function disableAnyApplication()
    {
    }
    public static function enableAnyApplication()
    {
    }
    public function addConditions($conditions)
    {
    }
    public function apply($products = \false)
    {
    }
    public function resetApplication($products = \false)
    {
    }
    /**
     * @param array|bool $products
     */
    public static function applyAllRules($products = \false)
    {
    }
    public function getConditions()
    {
    }
    /**
     * Return the product list affected by this specific rule.
     *
     * @param bool|array $products products list limitation
     *
     * @return array affected products list IDs
     *
     * @throws PrestaShopDatabaseException
     */
    public function getAffectedProducts($products = \false)
    {
    }
    public static function applyRuleToProduct($id_rule, $id_product, $id_product_attribute = \null)
    {
    }
}
