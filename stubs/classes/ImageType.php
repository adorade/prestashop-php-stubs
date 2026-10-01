<?php

/**
 * Class ImageTypeCore.
 */
class ImageTypeCore extends \ObjectModel
{
    public $id;
    /** @var string Name */
    public $name;
    /** @var int Width */
    public $width;
    /** @var int Height */
    public $height;
    /** @var value-of<\PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageFitment::AVAILABLE_VALUES> Image fitment */
    public $image_fitment = \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageFitment::FIT;
    /** @var bool Apply to products */
    public $products;
    /** @var bool Apply to categories */
    public $categories;
    /** @var bool Apply to manufacturers */
    public $manufacturers;
    /** @var bool Apply to suppliers */
    public $suppliers;
    /** @var bool Apply to store */
    public $stores;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'image_type', 'primary' => 'id_image_type', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isImageTypeName', 'required' => \true, 'size' => 64], 'width' => ['type' => self::TYPE_INT, 'validate' => 'isImageSize', 'required' => \true], 'height' => ['type' => self::TYPE_INT, 'validate' => 'isImageSize', 'required' => \true], 'image_fitment' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 16, 'values' => \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageFitment::AVAILABLE_VALUES], 'categories' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'products' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'manufacturers' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'suppliers' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'stores' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    /**
     * @var array Image types cache
     */
    protected static $images_types_cache = [];
    protected static $images_types_name_cache = [];
    protected $webserviceParameters = [];
    /**
     * Returns image type definitions.
     *
     * @param string|null $type Image type
     * @param bool $orderBySize
     *
     * @return array Image type definitions
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getImagesTypes($type = \null, $orderBySize = \false)
    {
    }
    /**
     * Returns image type by id.
     *
     * @param int $id id
     *
     * @return array Image type definitions
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getImageTypeById(int $id): array
    {
    }
    /**
     * Check if type is already registered in database.
     *
     * @param string $typeName Name
     *
     * @return int Number of results found
     */
    public static function typeAlreadyExists($typeName)
    {
    }
    /**
     * Finds image type definition by name and type.
     *
     * @param string $name
     * @param string $type
     */
    public static function getByNameNType($name, $type = \null, $order = 0)
    {
    }
    /**
     * Get formatted name.
     *
     * @param string $name
     *
     * @return string
     */
    public static function getFormattedName($name)
    {
    }
    /**
     * Get all image types.
     *
     * @return array
     */
    public static function getAll()
    {
    }
}
