<?php

/**
 * Class StoreCore.
 */
class StoreCore extends \ObjectModel
{
    /** @var int Store id */
    public $id;
    /** @var int|bool Store id */
    public $id_image;
    /** @var int Country id */
    public $id_country;
    /** @var int State id */
    public $id_state;
    /** @var string|array<string> Name */
    public $name;
    /** @var string|array<string> Address first line */
    public $address1;
    /** @var string|array<string> Address second line (optional) */
    public $address2;
    /** @var string Postal code */
    public $postcode;
    /** @var string City */
    public $city;
    /** @var float Latitude */
    public $latitude;
    /** @var float Longitude */
    public $longitude;
    /** @var string|array Store hours (PHP serialized) */
    public $hours;
    /** @var string Phone number */
    public $phone;
    /** @var string Fax number */
    public $fax;
    /** @var string|array<string> Note */
    public $note;
    /** @var string e-mail */
    public $email;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var bool Store status */
    public $active = \true;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'store', 'primary' => 'id_store', 'multilang' => \true, 'fields' => [
        'id_country' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'id_state' => ['type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId'],
        'postcode' => ['type' => self::TYPE_STRING, 'size' => 12],
        'city' => ['type' => self::TYPE_STRING, 'validate' => 'isCityName', 'required' => \true, 'size' => 64],
        'latitude' => ['type' => self::TYPE_FLOAT, 'validate' => 'isCoordinate', 'size' => 13],
        'longitude' => ['type' => self::TYPE_FLOAT, 'validate' => 'isCoordinate', 'size' => 13],
        'phone' => ['type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'size' => 16],
        'fax' => ['type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'size' => 16],
        'email' => ['type' => self::TYPE_STRING, 'validate' => 'isEmail', 'size' => 255],
        'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => \true],
        'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 255],
        'address1' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isAddress', 'required' => \true, 'size' => 255],
        'address2' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isAddress', 'size' => 255],
        'hours' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isJson', 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4],
        'note' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4],
    ]];
    protected $webserviceParameters = ['fields' => ['id_country' => ['xlink_resource' => 'countries'], 'id_state' => ['xlink_resource' => 'states'], 'hours' => ['getter' => 'getWsHours', 'setter' => 'setWsHours']]];
    /**
     * StoreCore constructor.
     *
     * @param int|null $idStore
     * @param int|null $idLang
     */
    public function __construct($idStore = \null, $idLang = \null)
    {
    }
    /**
     * Get Stores by language.
     *
     * @param int $idLang
     *
     * @return array
     */
    public static function getStores($idLang)
    {
    }
    /**
     * Get hours for webservice.
     *
     * @return string
     */
    public function getWsHours()
    {
    }
    /**
     * Set hours for webservice.
     *
     * @param string $hours
     *
     * @return bool
     */
    public function setWsHours($hours)
    {
    }
    /**
     * This method is allow to know if a store exists for AdminImportController.
     *
     * @return bool
     */
    public static function storeExists($idStore)
    {
    }
    /**
     * This method checks if at least one store is configured
     *
     * @return bool
     */
    public static function atLeastOneStoreExists()
    {
    }
}
