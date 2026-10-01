<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class TaxCore extends \ObjectModel
{
    public const TAX_DEFAULT_PRECISION = 3;
    /** @var array<int,string>|string Name */
    public $name;
    /** @var float Rate (%) */
    public $rate;
    /** @var bool active state */
    public $active;
    /** @var bool true if the tax has been historized */
    public $deleted = \false;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'tax', 'primary' => 'id_tax', 'multilang' => \true, 'fields' => [
        'rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => \true],
        'active' => ['type' => self::TYPE_BOOL],
        'deleted' => ['type' => self::TYPE_BOOL],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 32],
    ]];
    protected static $_product_country_tax = [];
    protected static $_product_tax_via_rules = [];
    protected $webserviceParameters = ['objectsNodeName' => 'taxes'];
    public function delete()
    {
    }
    /**
     * Save the object with the field deleted to true.
     *
     * @return bool
     */
    public function historize()
    {
    }
    public function update($null_values = \false)
    {
    }
    /**
     * Returns true if the tax is used in an order details.
     *
     * @return bool
     */
    public function isUsed()
    {
    }
    /**
     * Get all available taxes.
     *
     * @param int|bool $id_lang
     * @param bool $active_only (true by default)
     *
     * @return array Taxes
     */
    public static function getTaxes($id_lang = \false, $active_only = \true)
    {
    }
    /**
     * Returns true if taxes are disabled in Prestashop.
     *
     * @return bool
     *
     * @deprecated since 9.0, please use Configuration::get('PS_TAX') directly
     */
    public static function excludeTaxeOption()
    {
    }
    /**
     * Return the tax id associated to the specified name.
     *
     * @param string $tax_name
     * @param bool|int $active (true by default)
     */
    public static function getTaxIdByName($tax_name, $active = 1)
    {
    }
    /**
     * Returns the ecotax tax rate.
     *
     * @param int $id_address
     *
     * @return float $tax_rate
     */
    public static function getProductEcotaxRate($id_address = \null)
    {
    }
    /**
     * Returns the carrier tax rate.
     *
     * @param int $id_carrier
     * @param int $id_address
     *
     * @return float $tax_rate
     */
    public static function getCarrierTaxRate($id_carrier, $id_address = \null)
    {
    }
    /**
     * Returns the product tax rate.
     *
     * @param int $id_product
     * @param int $id_address
     * @param Context $context
     *
     * @return float
     */
    public static function getProductTaxRate($id_product, $id_address = \null, ?\Context $context = \null)
    {
    }
}
