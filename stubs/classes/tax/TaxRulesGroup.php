<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class TaxRulesGroupCore extends \ObjectModel
{
    public $name;
    /** @var bool active state */
    public $active;
    public $deleted = 0;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'tax_rules_group', 'primary' => 'id_tax_rules_group', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 64], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'deleted' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    protected $webserviceParameters = ['objectsNodeName' => 'tax_rule_groups', 'objectNodeName' => 'tax_rule_group', 'fields' => []];
    protected static $_taxes = [];
    /**
     * @param bool $null_values
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($null_values = \false)
    {
    }
    /**
     * Save the object with the field deleted to true.
     *
     * @return bool
     */
    public function historize(\TaxRulesGroup $tax_rules_group)
    {
    }
    public function getIdTaxRuleGroupFromHistorizedId($id_tax_rule)
    {
    }
    public static function getTaxRulesGroups($only_active = \true)
    {
    }
    /**
     * This method returns the list of TaxRulesGroup as array with default placeholder
     * it is used to populate a select box. The returned array is formatted like this:
     * [
     *   [
     *     'id_tax_rules_group' => ...,
     *     'name' => ...,
     *     'active' => ...,
     *     'rate' => ...,
     *   ],
     *   ...
     * ]
     *
     * @return array an array of tax rules group formatted as:
     */
    public static function getTaxRulesGroupsForOptions()
    {
    }
    public function delete()
    {
    }
    /**
     * @return array
     */
    public static function getAssociatedTaxRatesByIdCountry($id_country)
    {
    }
    /**
     * Returns the tax rules group id corresponding to the name.
     *
     * @param string $name
     *
     * @return int id of the tax rules
     */
    public static function getIdByName($name)
    {
    }
    public function hasUniqueTaxRuleForCountry($id_country, $id_state, $id_tax_rule = \false)
    {
    }
    public function isUsed()
    {
    }
}
