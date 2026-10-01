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
class TaxRuleCore extends \ObjectModel
{
    public $id_tax_rules_group;
    public $id_country;
    public $id_state;
    public $zipcode_from;
    public $zipcode_to;
    public $id_tax;
    public $behavior;
    public $description;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'tax_rule', 'primary' => 'id_tax_rule', 'fields' => ['id_tax_rules_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_country' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_state' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'zipcode_from' => ['type' => self::TYPE_STRING, 'validate' => 'isPostCode'], 'zipcode_to' => ['type' => self::TYPE_STRING, 'validate' => 'isPostCode'], 'id_tax' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'behavior' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'description' => ['type' => self::TYPE_STRING, 'validate' => 'isString']]];
    protected $webserviceParameters = ['fields' => ['id_tax_rules_group' => ['xlink_resource' => 'tax_rule_groups'], 'id_state' => ['xlink_resource' => 'states'], 'id_country' => ['xlink_resource' => 'countries']]];
    public static function deleteByGroupId($id_group)
    {
    }
    public static function retrieveById($id_tax_rule)
    {
    }
    public static function getTaxRulesByGroupId($id_lang, $id_group)
    {
    }
    public static function deleteTaxRuleByIdTax($id_tax)
    {
    }
    /**
     * @param int $id_tax
     *
     * @return int
     */
    public static function isTaxInUse($id_tax)
    {
    }
    /**
     * @param string $zip_codes a range of zipcode (eg: 75000 / 75000-75015)
     *
     * @return array an array containing two zipcode ordered by zipcode
     */
    public function breakDownZipCode($zip_codes)
    {
    }
    /**
     * Replace a tax_rule id by an other one in the tax_rule table.
     *
     * @param int $old_id
     * @param int $new_id
     */
    public static function swapTaxId($old_id, $new_id)
    {
    }
}
