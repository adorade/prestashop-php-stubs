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
    public static $definition = ['table' => 'image_type', 'primary' => 'id_image_type', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isImageTypeName', 'required' => \true, 'size' => 64], 'width' => ['type' => self::TYPE_INT, 'validate' => 'isImageSize', 'required' => \true], 'height' => ['type' => self::TYPE_INT, 'validate' => 'isImageSize', 'required' => \true], 'categories' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'products' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'manufacturers' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'suppliers' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'stores' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
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
