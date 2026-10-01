<?php

/**
 * Class ManufacturerCore.
 */
class ManufacturerCore extends \ObjectModel
{
    public $id;
    /** @var string Name */
    public $name;
    /** @var string|array<int, string> Description */
    public $description;
    /** @var string|array<int, string> Short description */
    public $short_description;
    /** @var int Address */
    public $id_address;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var string Friendly URL */
    public $link_rewrite;
    /** @var string|array<int, string> Meta title */
    public $meta_title;
    /** @var string|array<int, string> Meta description */
    public $meta_description;
    /** @var bool active */
    public $active;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'manufacturer', 'primary' => 'id_manufacturer', 'multilang' => \true, 'fields' => [
        'name' => ['type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'required' => \true, 'size' => 64],
        'active' => ['type' => self::TYPE_BOOL],
        'date_add' => ['type' => self::TYPE_DATE],
        'date_upd' => ['type' => self::TYPE_DATE],
        /* Lang fields */
        'description' => ['type' => self::TYPE_HTML, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4],
        'short_description' => ['type' => self::TYPE_HTML, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4],
        'meta_title' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'meta_description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 512],
    ]];
    protected $webserviceParameters = ['fields' => ['active' => [], 'link_rewrite' => ['getter' => 'getLink', 'setter' => \false]], 'associations' => ['addresses' => ['resource' => 'address', 'setter' => \false, 'fields' => ['id' => ['xlink_resource' => 'addresses']]]]];
    /**
     * ManufacturerCore constructor.
     *
     * @param int|null $id
     * @param int|null $idLang
     */
    public function __construct($id = \null, $idLang = \null)
    {
    }
    /**
     * Deletes current Manufacturer from the database.
     *
     * @return bool `true` if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Delete several objects from database.
     *
     * return boolean Deletion result
     */
    public function deleteSelection(array $selection)
    {
    }
    /**
     * Get Manufacturer Address ID.
     *
     * @return bool|int
     */
    protected function getManufacturerAddress()
    {
    }
    /**
     * Return manufacturers.
     *
     * @param bool $getNbProducts [optional] return products numbers for each
     * @param int $idLang Language ID
     * @param bool $active
     * @param int|bool $p
     * @param int|bool $n
     * @param bool $allGroup
     *
     * @return array|bool Manufacturers
     */
    public static function getManufacturers($getNbProducts = \false, $idLang = 0, $active = \true, $p = \false, $n = \false, $allGroup = \false, $group_by = \false, $withProduct = \false)
    {
    }
    /**
     * List of manufacturers.
     *
     * @param int $idLang Specify the id of the language used
     *
     * @return array Manufacturers lite tree
     */
    public static function getLiteManufacturersList($idLang = \null, $format = 'default')
    {
    }
    /**
     * Return name from id.
     *
     * @param int $id_manufacturer Manufacturer ID
     *
     * @return string name
     */
    protected static $cacheName = [];
    public static function getNameById($idManufacturer)
    {
    }
    /**
     * Get Manufacturer ID by name.
     *
     * @param string $name
     *
     * @return bool|int
     */
    public static function getIdByName($name)
    {
    }
    /**
     * Get link to Manufacturer page.
     *
     * @return string
     */
    public function getLink()
    {
    }
    /**
     * Get Products by Manufacturer ID.
     *
     * @param int $idManufacturer
     * @param int $idLang
     * @param int $p
     * @param int $n
     * @param string|null $orderBy
     * @param string|null $orderWay
     * @param bool $getTotal
     * @param bool $active
     * @param bool $activeCategory
     * @param Context|null $context
     *
     * @return array|bool|int
     */
    public static function getProducts($idManufacturer, $idLang, $p, $n, $orderBy = \null, $orderWay = \null, $getTotal = \false, $active = \true, $activeCategory = \true, ?\Context $context = \null)
    {
    }
    /**
     * Get Products by Manufacturer
     * (light edition).
     *
     * @param int $idLang
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getProductsLite($idLang)
    {
    }
    /**
     * Specify if a manufacturer already in base.
     *
     * @param int $idManufacturer Manufacturer id
     *
     * @return bool
     */
    public static function manufacturerExists($idManufacturer)
    {
    }
    /**
     * Get Manufacturer Addresses.
     *
     * @param int $idLang
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getAddresses($idLang)
    {
    }
    /**
     * Get Manufacturer Addresses
     * (for webservice).
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getWsAddresses()
    {
    }
    /**
     * Set Manufacturer Addresses
     * (for webservice).
     *
     * @param array $idAddresses
     *
     * @return bool
     */
    public function setWsAddresses($idAddresses)
    {
    }
}
