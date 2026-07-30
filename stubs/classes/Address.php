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
 * Class AddressCore.
 */
class AddressCore extends \ObjectModel
{
    /** @var int Customer ID which address belongs to */
    public $id_customer = \null;
    /** @var int Manufacturer ID which address belongs to */
    public $id_manufacturer = \null;
    /** @var int Supplier ID which address belongs to */
    public $id_supplier = \null;
    /**
     * @since 1.5.0
     *
     * @var int Warehouse ID which address belongs to
     */
    public $id_warehouse = \null;
    /** @var int Country ID */
    public $id_country;
    /** @var int State ID */
    public $id_state;
    /** @var string Country name */
    public $country;
    /** @var string Alias (eg. Home, Work...) */
    public $alias;
    /** @var string Company (optional) */
    public $company;
    /** @var string Lastname */
    public $lastname;
    /** @var string Firstname */
    public $firstname;
    /** @var string Address first line */
    public $address1;
    /** @var string Address second line (optional) */
    public $address2;
    /** @var string Postal code */
    public $postcode;
    /** @var string City */
    public $city;
    /** @var string Any other useful information */
    public $other;
    /** @var string Phone number */
    public $phone;
    /** @var string Mobile phone number */
    public $phone_mobile;
    /** @var string VAT number */
    public $vat_number;
    /** @var string DNI number */
    public $dni;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var bool True if address has been deleted (staying in database as deleted) */
    public $deleted = \false;
    /** @var array Zone IDs cache */
    protected static $_idZones = [];
    /** @var array Country IDs cache */
    protected static $_idCountries = [];
    /** @var array<int, bool> Store if an adress ID exists. Please note that soft-deleted address also belongs to this cache. */
    protected static $addressExists = [];
    /**
     * @see ObjectModel::$definition
     */
    // when you override this class, do not create a field with allow_null=>true
    // because it will give you exception on checkout address step
    public static $definition = ['table' => 'address', 'primary' => 'id_address', 'fields' => ['id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => \false], 'id_manufacturer' => ['type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => \false], 'id_supplier' => ['type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => \false], 'id_warehouse' => ['type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => \false], 'id_country' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_state' => ['type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId'], 'alias' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 32], 'company' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 255], 'lastname' => ['type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => \true, 'size' => 255], 'firstname' => ['type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => \true, 'size' => 255], 'vat_number' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName'], 'address1' => ['type' => self::TYPE_STRING, 'validate' => 'isAddress', 'required' => \true, 'size' => 128], 'address2' => ['type' => self::TYPE_STRING, 'validate' => 'isAddress', 'size' => 128], 'postcode' => ['type' => self::TYPE_STRING, 'validate' => 'isPostCode', 'size' => 12], 'city' => ['type' => self::TYPE_STRING, 'validate' => 'isCityName', 'required' => \true, 'size' => 64], 'other' => ['type' => self::TYPE_STRING, 'validate' => 'isMessage', 'size' => 4194303], 'phone' => ['type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'size' => 32], 'phone_mobile' => ['type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'size' => 32], 'dni' => ['type' => self::TYPE_STRING, 'validate' => 'isDniLite', 'size' => 16], 'deleted' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => \false], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => \false], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => \false]]];
    /** @var array Web service parameters */
    protected $webserviceParameters = ['objectsNodeName' => 'addresses', 'fields' => ['id_customer' => ['xlink_resource' => 'customers'], 'id_manufacturer' => ['xlink_resource' => 'manufacturers'], 'id_supplier' => ['xlink_resource' => 'suppliers'], 'id_warehouse' => ['xlink_resource' => 'warehouse'], 'id_country' => ['xlink_resource' => 'countries'], 'id_state' => ['xlink_resource' => 'states']]];
    /**
     * Build an Address.
     *
     * @param int|null $id_address Existing Address ID in order to load object (optional)
     * @param int|null $id_lang Language ID (optional). Configuration::PS_LANG_DEFAULT will be used if null
     */
    public function __construct($id_address = \null, $id_lang = \null)
    {
    }
    /**
     * reset static cache (eg unit testing purpose).
     */
    public static function resetStaticCache()
    {
    }
    /**
     * @see ObjectModel::add()
     */
    public function add($autodate = \true, $null_values = \false)
    {
    }
    /**
     * @see ObjectModel::update()
     */
    public function update($null_values = \false)
    {
    }
    /**
     * @see ObjectModel::delete()
     */
    public function delete()
    {
    }
    /**
     * Removes the address from all non ordered carts using it,
     * to avoid errors on not existing address.
     */
    protected function deleteCartAddress()
    {
    }
    /**
     * Returns fields required for an address in an array hash.
     *
     * @return array Hash values
     */
    public static function getFieldsValidate()
    {
    }
    /**
     * Get Zone ID for a given address.
     *
     * @param int $id_address Address ID for which we want to get the Zone ID
     *
     * @return int|bool Zone ID
     */
    public static function getZoneById($id_address)
    {
    }
    /**
     * Check if the Country is active for a given address.
     *
     * @param int $id_address Address ID for which we want to get the Country status
     *
     * @return int|bool Country status
     */
    public static function isCountryActiveById($id_address)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateField($field, $value, $id_lang = \null, $skip = [], $human_errors = \false)
    {
    }
    /**
     * Request to check if DNI field is required
     * depending on the current selected country.
     *
     * @param int $idCountry
     *
     * @return bool
     */
    public static function dniRequired($idCountry)
    {
    }
    /**
     * Check if Address is used (at least one order placed).
     *
     * @return int|bool Order count for this Address
     */
    public function isUsed()
    {
    }
    /**
     * Get Country and State of this Address.
     *
     * @param int $id_address Address ID
     *
     * @return array|bool
     */
    public static function getCountryAndState($id_address)
    {
    }
    /**
     * Specify if an address is already in database.
     * Please note that a soft-deleted address also counts as existing.
     *
     * @param int $id_address Address id
     * @param bool $useCache Use Cache for optimizing queries
     *
     * @return bool The address exists
     */
    public static function addressExists($id_address, bool $useCache = \false)
    {
    }
    /**
     * Check if the address is valid.
     *
     * @param int $id_address Address id
     *
     * @return bool The address is valid
     */
    public static function isValid($id_address)
    {
    }
    /**
     * Get the first address id of the customer.
     *
     * @param int $id_customer Customer id
     * @param bool $active Active addresses only
     *
     * @return bool|int|null
     */
    public static function getFirstCustomerAddressId($id_customer, $active = \true)
    {
    }
    /**
     * Initialize an address corresponding to the specified id address or if empty to the
     * default shop configuration.
     *
     * @param int $id_address
     * @param bool $with_geoloc
     *
     * @return Address address
     *
     * @throws PrestaShopException
     */
    public static function initialize($id_address = \null, $with_geoloc = \false)
    {
    }
    /**
     * Returns Address ID for a given Supplier ID.
     *
     * @since 1.5.0
     *
     * @param int $id_supplier Supplier ID
     *
     * @return int $id_address Address ID
     */
    public static function getAddressIdBySupplierId($id_supplier)
    {
    }
    /**
     * Check if the alias already exists.
     *
     * @param string $alias Alias of an address
     * @param int $id_address Address id
     * @param int $id_customer Customer id
     *
     * @return false|string|null Amount of aliases found
     * @todo: Find out if we shouldn't be returning an int instead? (breaking change)
     */
    public static function aliasExist($alias, $id_address, $id_customer)
    {
    }
    /**
     * @see ObjectModel::getFieldsRequiredDB();
     */
    public function getFieldsRequiredDB()
    {
    }
}
