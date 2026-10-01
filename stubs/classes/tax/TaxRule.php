<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    public static $definition = ['table' => 'tax_rule', 'primary' => 'id_tax_rule', 'fields' => ['id_tax_rules_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_country' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_state' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'zipcode_from' => ['type' => self::TYPE_STRING, 'validate' => 'isPostCode', 'size' => 12], 'zipcode_to' => ['type' => self::TYPE_STRING, 'validate' => 'isPostCode', 'size' => 12], 'id_tax' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'behavior' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'description' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 100]]];
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
