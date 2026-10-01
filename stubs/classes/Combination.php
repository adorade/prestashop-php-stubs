<?php

/**
 * Class CombinationCore.
 */
class CombinationCore extends \ObjectModel
{
    /** @var int Product ID */
    public $id_product;
    public $reference;
    /**
     * @deprecated since 8.1.0
     *
     * @var string
     */
    public $supplier_reference;
    public $ean13;
    public $isbn;
    public $upc;
    public $mpn;
    public $wholesale_price;
    public $price;
    public $unit_price_impact;
    public $ecotax;
    public $minimal_quantity = 1;
    /** @var int|null Low stock for mail alert */
    public $low_stock_threshold = \null;
    /** @var bool Low stock mail alert activated */
    public $low_stock_alert = \false;
    public $weight;
    /** @var bool|null */
    public $default_on;
    public $available_date = '0000-00-00';
    /** @var string|array Text when in stock or array of text by id_lang */
    public $available_now;
    /** @var string|array Text when not in stock but available to order or array of text by id_lang */
    public $available_later;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'product_attribute', 'primary' => 'id_product_attribute', 'multilang' => \true, 'fields' => [
        'id_product' => ['type' => self::TYPE_INT, 'shop' => 'both', 'validate' => 'isUnsignedId', 'required' => \true],
        'ean13' => ['type' => self::TYPE_STRING, 'validate' => 'isEan13', 'size' => 13],
        'isbn' => ['type' => self::TYPE_STRING, 'validate' => 'isIsbn', 'size' => 32],
        'upc' => ['type' => self::TYPE_STRING, 'validate' => 'isUpc', 'size' => 12],
        'mpn' => ['type' => self::TYPE_STRING, 'validate' => 'isMpn', 'size' => 40],
        'reference' => ['type' => self::TYPE_STRING, 'size' => 64],
        'supplier_reference' => ['type' => self::TYPE_STRING, 'size' => 64],
        /* Shop fields */
        'wholesale_price' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isNegativePrice', 'size' => 27],
        'price' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isNegativePrice', 'size' => 20],
        'ecotax' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isPrice', 'size' => 20],
        'weight' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isFloat'],
        'unit_price_impact' => ['type' => self::TYPE_FLOAT, 'shop' => \true, 'validate' => 'isNegativePrice', 'size' => 20],
        'minimal_quantity' => ['type' => self::TYPE_INT, 'shop' => \true, 'validate' => 'isPositiveInt', 'required' => \true],
        'low_stock_threshold' => ['type' => self::TYPE_INT, 'shop' => \true, 'allow_null' => \true, 'validate' => 'isInt'],
        'low_stock_alert' => ['type' => self::TYPE_BOOL, 'shop' => \true, 'validate' => 'isBool'],
        'default_on' => ['type' => self::TYPE_BOOL, 'allow_null' => \true, 'shop' => \true, 'validate' => 'isBool'],
        'available_date' => ['type' => self::TYPE_DATE, 'shop' => \true, 'validate' => 'isDateFormat'],
        /* Lang fields */
        'available_now' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => \PrestaShop\PrestaShop\Core\Domain\Combination\CombinationSettings::MAX_AVAILABLE_NOW_LABEL_LENGTH],
        'available_later' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'IsGenericName', 'size' => \PrestaShop\PrestaShop\Core\Domain\Combination\CombinationSettings::MAX_AVAILABLE_LATER_LABEL_LENGTH],
    ]];
    protected $webserviceParameters = ['objectNodeName' => 'combination', 'objectsNodeName' => 'combinations', 'fields' => ['id_product' => ['required' => \true, 'xlink_resource' => 'products']], 'associations' => ['product_option_values' => ['resource' => 'product_option_value'], 'images' => ['resource' => 'image', 'api' => 'images/products']]];
    /**
     * Deletes current Combination from the database.
     *
     * @return bool True if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Delete from Supplier.
     *
     * @param int $idProduct Product ID
     *
     * @return bool
     */
    public function deleteFromSupplier($idProduct)
    {
    }
    /**
     * Delete association with Pack.
     *
     * @return bool
     */
    protected function deleteFromPack(): bool
    {
    }
    /**
     * Adds current Combination as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Combination has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * Updates the current Combination in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Combination has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Delete associations.
     *
     * @return bool Indicates whether associations have been successfully deleted
     */
    public function deleteAssociations()
    {
    }
    /**
     * Delete product combination from cart.
     *
     * @return bool
     */
    protected function deleteCartProductCombination(): bool
    {
    }
    /**
     * @param array $idsAttribute
     *
     * @return bool
     */
    public function setAttributes($idsAttribute)
    {
    }
    /**
     * @param array $values
     *
     * @return bool
     */
    public function setWsProductOptionValues($values)
    {
    }
    /**
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getWsProductOptionValues()
    {
    }
    /**
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getWsImages()
    {
    }
    /**
     * @param array<int> $idsImage
     *
     * @return bool
     */
    public function setImages($idsImage)
    {
    }
    /**
     * @param array<array{id: int}> $values
     *
     * @return bool
     */
    public function setWsImages($values)
    {
    }
    /**
     * @param int $idLang
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getAttributesName($idLang)
    {
    }
    /**
     * This method is allow to know if a feature is active.
     *
     * @since 1.5.0.1
     *
     * @return bool
     */
    public static function isFeatureActive()
    {
    }
    /**
     * This method is allow to know if a Combination entity is currently used.
     *
     * @since 1.5.0.1
     *
     * @param string|null $table Name of table linked to entity
     * @param bool $hasActiveColumn True if the table has an active column
     *
     * @return bool
     */
    public static function isCurrentlyUsed($table = \null, $hasActiveColumn = \false)
    {
    }
    /**
     * For a given ean13 reference, returns the corresponding id.
     *
     * @param string $ean13
     *
     * @return int|string Product attribute identifier
     */
    public static function getIdByEan13($ean13)
    {
    }
    /**
     * For a given product_attribute reference, returns the corresponding id.
     *
     * @param int $idProduct
     * @param string $reference
     *
     * @return int ID
     */
    public static function getIdByReference($idProduct, $reference)
    {
    }
    /**
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getColorsAttributes()
    {
    }
    /**
     * Retrive the price of combination.
     *
     * @param int $idProductAttribute
     *
     * @return string
     *
     * @since 1.5.0
     */
    public static function getPrice($idProductAttribute)
    {
    }
}
