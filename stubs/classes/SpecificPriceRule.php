<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    public static $definition = ['table' => 'specific_price_rule', 'primary' => 'id_specific_price_rule', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => \true, 'size' => 255], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_country' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_currency' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'from_quantity' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => \true], 'price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isNegativePrice', 'required' => \true], 'reduction' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'reduction_tax' => ['type' => self::TYPE_INT, 'validate' => 'isBool', 'required' => \true], 'reduction_type' => ['type' => self::TYPE_STRING, 'validate' => 'isReductionType', 'required' => \true], 'from' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => \false], 'to' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => \false]]];
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
