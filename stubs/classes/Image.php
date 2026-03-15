<?php

/**
 * Class ImageCore.
 */
class ImageCore extends \ObjectModel
{
    public $id;
    /** @var int Image ID */
    public $id_image;
    /** @var int Product ID */
    public $id_product;
    /** @var int Position used to order images of the same product */
    public $position;
    /** @var bool|null Image is cover */
    public $cover;
    /** @var array<int,string> Legend */
    public $legend;
    /** @var string image extension */
    public $image_format = 'jpg';
    /** @var string path to index.php file to be copied to new image folders */
    public $source_index;
    /** @var string image folder */
    protected $folder;
    /** @var string image path without extension */
    protected $existing_path;
    /** @var int access rights of created folders (octal) */
    protected static $access_rights = 0775;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'image', 'primary' => 'id_image', 'multilang' => \true, 'fields' => ['id_product' => ['type' => self::TYPE_INT, 'shop' => 'both', 'validate' => 'isUnsignedId', 'required' => \true], 'position' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'cover' => ['type' => self::TYPE_BOOL, 'allow_null' => \true, 'validate' => 'isBool', 'shop' => \true], 'legend' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 128]]];
    /**
     * @var array
     */
    protected static $_cacheGetSize = [];
    /**
     * ImageCore constructor.
     *
     * @param int|null $id
     * @param int|null $idLang
     * @param null $id_shop
     * @param null $translator
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function __construct($id = \null, $idLang = \null, $id_shop = \null, $translator = \null)
    {
    }
    /**
     * Adds current Image as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Image has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * This override is needed because we need to set 'id_product' => (int) $this->id_product, in $data array which is
     * a specific case for association between shop and image
     *
     * {@inheritDoc}
     */
    public function associateTo($id_shops, int $productId = \null)
    {
    }
    /**
     * Updates the current Image in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Image has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Deletes current Image from the database.
     *
     * @return bool `true` if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Return first image (by position) associated with a product attribute.
     *
     * @param int $idShop Shop ID
     * @param int $idLang Language ID
     * @param int $idProduct Product ID
     * @param int $idProductAttribute Product Attribute ID
     *
     * @return array
     */
    public static function getBestImageAttribute($idShop, $idLang, $idProduct, $idProductAttribute)
    {
    }
    /**
     * Return available images for a product.
     *
     * @param int $idLang Language ID
     * @param int $idProduct Product ID
     * @param int $idProductAttribute Product Attribute ID
     * @param int $idShop Shop ID
     *
     * @return array Images
     */
    public static function getImages($idLang, $idProduct, $idProductAttribute = \null, $idShop = \null)
    {
    }
    /**
     * Check if a product has an image available.
     *
     * @param int $idLang Language ID
     * @param int $idProduct Product ID
     * @param int $idProductAttribute Product Attribute ID
     *
     * @return bool
     */
    public static function hasImages($idLang, $idProduct, $idProductAttribute = \null)
    {
    }
    /**
     * Return Images.
     *
     * @return array Images
     */
    public static function getAllImages()
    {
    }
    /**
     * Return number of images for a product.
     *
     * @param int $idProduct Product ID
     *
     * @return int number of images
     */
    public static function getImagesTotal($idProduct)
    {
    }
    /**
     * Return highest position of images for a product.
     *
     * @param int $idProduct Product ID
     *
     * @return int highest position of images
     */
    public static function getHighestPosition($idProduct)
    {
    }
    /**
     * Delete product cover.
     *
     * @param int $idProduct Product ID
     *
     * @return bool result
     */
    public static function deleteCover($idProduct)
    {
    }
    /**
     *Get product cover.
     *
     * @param int $idProduct Product ID
     *
     * @return bool result
     */
    public static function getCover($idProduct)
    {
    }
    /**
     *Get global product cover.
     *
     * @param int $idProduct Product ID
     *
     * @return bool result
     */
    public static function getGlobalCover($idProduct)
    {
    }
    /**
     * Copy images from a product to another.
     *
     * @param int $idProductOld Source product ID
     * @param int $idProductNew Destination product ID
     */
    public static function duplicateProductImages($idProductOld, $idProductNew, $combinationImages)
    {
    }
    /**
     * @param array $combinationImages
     * @param int $savedId
     * @param int $idImage
     */
    protected static function replaceAttributeImageAssociationId(&$combinationImages, $savedId, $idImage)
    {
    }
    /**
     * Duplicate product attribute image associations.
     *
     * @param array $combinationImages
     *
     * @return bool
     */
    public static function duplicateAttributeImageAssociations($combinationImages)
    {
    }
    /**
     * Change an image position and update relative positions.
     *
     * @param int $way position is moved up if 0, moved down if 1
     * @param int $position new position of the moved image
     *
     * @return bool success
     */
    public function updatePosition($way, $position)
    {
    }
    /**
     * @param string $type
     *
     * @return mixed
     */
    public static function getSize($type)
    {
    }
    /**
     * @param array $params
     *
     * @return mixed
     */
    public static function getWidth($params)
    {
    }
    /**
     * @param array $params
     *
     * @return mixed
     */
    public static function getHeight($params)
    {
    }
    /**
     * Clear all images in tmp dir.
     */
    public static function clearTmpDir()
    {
    }
    /**
     * Delete Image - Product attribute associations for this image.
     */
    public function deleteProductAttributeImage()
    {
    }
    /**
     * Delete the product image from disk and remove the containing folder if empty
     * Handles both legacy and new image filesystems.
     */
    public function deleteImage($forceDelete = \false)
    {
    }
    /**
     * Recursively deletes all product images in the given folder tree and removes empty folders.
     *
     * @param string $path folder containing the product images to delete
     * @param string $format image format
     *
     * @return bool success
     */
    public static function deleteAllImages($path, $format = 'jpg')
    {
    }
    /**
     * Returns image path in the old or in the new filesystem.
     *
     * @ returns string image path
     */
    public function getExistingImgPath()
    {
    }
    /**
     * Returns the path to the folder containing the image in the new filesystem.
     *
     * @return string|bool path to folder
     */
    public function getImgFolder()
    {
    }
    /**
     * Create parent folders for the image in the new filesystem.
     *
     * @return bool success
     */
    public function createImgFolder()
    {
    }
    /**
     * Returns the path to the image without file extension.
     *
     * @return string|bool path
     */
    public function getImgPath()
    {
    }
    /**
     * Returns the path to the folder containing the image in the new filesystem.
     *
     * @param mixed $idImage
     *
     * @return string|bool path to folder
     */
    public static function getImgFolderStatic($idImage)
    {
    }
    /**
     * Move all legacy product image files from the image folder root to their subfolder in the new filesystem.
     * If max_execution_time is provided, stops before timeout and returns string "timeout".
     * If any image cannot be moved, stops and returns "false".
     *
     * @param int $maxExecutionTime
     *
     * @return mixed success or timeout
     */
    public static function moveToNewFileSystem($maxExecutionTime = 0)
    {
    }
    /**
     * Try to create and delete some folders to check if moving images to new file system will be possible.
     *
     * @return bool success
     */
    public static function testFileSystem()
    {
    }
    /**
     * Returns the path where a product image should be created (without file format).
     *
     * @return string|bool path
     */
    public function getPathForCreation()
    {
    }
}
