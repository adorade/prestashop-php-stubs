<?php

/**
 * Class AddressFormatCore.
 */
class AddressFormatCore extends \ObjectModel
{
    public const FORMAT_NEW_LINE = "\n";
    /** @var int Address format */
    public $id_address_format;
    /** @var int Country ID */
    public $id_country;
    /** @var string Format */
    public $format;
    protected $_errorFormatList = [];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'address_format', 'primary' => 'id_country', 'fields' => ['format' => ['type' => self::TYPE_HTML, 'validate' => 'isGenericName', 'required' => \true], 'id_country' => ['type' => self::TYPE_INT]]];
    /** @var array Default required form fields list */
    public static $requireFormFieldsList = ['firstname', 'lastname', 'address1', 'city', 'Country:name'];
    /** @var array Default forbidden property list */
    public static $forbiddenPropertyList = ['deleted', 'date_add', 'alias', 'secure_key', 'note', 'newsletter', 'ip_registration_newsletter', 'newsletter_date_add', 'optin', 'passwd', 'last_passwd_gen', 'active', 'is_guest', 'date_upd', 'country', 'years', 'days', 'months', 'description', 'meta_description', 'short_description', 'link_rewrite', 'meta_title', 'meta_keywords', 'display_tax_label', 'need_zip_code', 'contains_states', 'call_prefixes', 'show_public_prices', 'max_payment', 'max_payment_days', 'geoloc_postcode', 'logged', 'account_number', 'groupBox', 'ape', 'max_payment', 'outstanding_allow_amount', 'call_prefix', 'definition', 'debug_list'];
    /** @var array Default formbidden class list */
    public static $forbiddenClassList = ['Manufacturer', 'Supplier'];
    public const _CLEANING_REGEX_ = '#([^\w:_]+)#i';
    /**
     * Check if the the association of the field name and a class name
     * is valid.
     *
     * @param string $className The name class
     * @param string $fieldName The property name
     * @param bool $isIdField Do we have to allow a property name to be started with 'id_'
     *
     * @return bool Association of the field and class name is valid
     */
    protected function _checkValidateClassField($className, $fieldName, $isIdField)
    {
    }
    /**
     * Verify the existence of a field name and check the availability
     * of an association between a field name and a class (ClassName:fieldName)
     * if the separator is overview.
     *
     * @param string $patternName The composition of the class and field name
     */
    protected function _checkLiableAssociation($patternName)
    {
    }
    /**
     * Check if the set fields are valid.
     */
    public function checkFormatFields()
    {
    }
    /**
     * Checks that all required fields exist in a given fields list.
     * Fills _errorFormatList array in case of absence of a required field.
     *
     * @param array $fieldList
     */
    protected function checkRequiredFields($fieldList)
    {
    }
    /**
     * Returns the error list.
     */
    public function getErrorList()
    {
    }
    /**
     * Set the layout key with the liable value
     * example : (firstname) => 'Presta' will result (Presta)
     *         : (firstname-lastname) => 'Presta' and 'Shop' result '(Presta-Shop)'.
     */
    protected static function _setOriginalDisplayFormat(&$formattedValueList, $currentLine, $currentKeyList)
    {
    }
    /**
     * Cleaned the layout set by the user.
     */
    public static function cleanOrderedAddress(&$orderedAddressField)
    {
    }
    /**
     * Returns the formatted fields with associated values.
     *
     * @param Address $address Address object
     * @param array $addressFormat Address format fields by line
     * @param int|null $id_lang
     *
     * @return array
     */
    public static function getFormattedAddressFieldsValues($address, $addressFormat, $id_lang = \null)
    {
    }
    /**
     * Generates the full address text.
     *
     * @param Address $address
     * @param array $patternRules A defined rules array to avoid some pattern
     * @param string $newLine A string containing the newLine format
     * @param string $separator A string containing the separator format
     * @param array $style
     *
     * @return string
     */
    public static function generateAddress(\Address $address, $patternRules = [], $newLine = self::FORMAT_NEW_LINE, $separator = ' ', $style = [])
    {
    }
    /**
     * Generate formatted Address string for display on Smarty templates.
     *
     * @param array $params Address parameters
     * @param Smarty $smarty Smarty instance
     *
     * @return string Formatted Address string
     */
    public static function generateAddressSmarty($params, &$smarty)
    {
    }
    /**
     * Returns selected fields required for an address in an array according to a selection hash.
     *
     * @return array String values
     */
    public static function getValidateFields($className)
    {
    }
    /**
     * Return a list of liable class of the className.
     *
     * @param string $className
     *
     * @return array
     */
    public static function getLiableClass($className)
    {
    }
    /**
     * Returns address format fields in array by country.
     *
     * @param int $idCountry If null using PS_COUNTRY_DEFAULT
     * @param bool $splitAll
     * @param bool $cleaned
     *
     * @return array String field address format
     */
    public static function getOrderedAddressFields($idCountry = 0, $splitAll = \false, $cleaned = \false)
    {
    }
    /**
     * Return a data array containing ordered, formatedValue and object fields.
     */
    public static function getFormattedLayoutData($address)
    {
    }
    /**
     * Returns address format by country if not defined using default country.
     *
     * @param int $idCountry Country ID
     *
     * @return string field address format
     */
    public static function getAddressCountryFormat($idCountry = 0)
    {
    }
    /**
     * Returns address format by Country.
     *
     * @param int $idCountry Country ID
     *
     * @return string field Address format
     */
    public function getFormat($idCountry)
    {
    }
    /**
     * Get Address format from DB.
     *
     * @param int $idCountry Country ID
     *
     * @return false|string|null Address format
     *
     * @since 1.7.0
     */
    protected function getFormatDB($idCountry)
    {
    }
    /**
     * @see ObjectModel::getFieldsRequired()
     */
    public static function getFieldsRequired()
    {
    }
}
