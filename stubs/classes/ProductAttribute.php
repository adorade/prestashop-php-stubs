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
 * Class ProductAttributeCore.
 */
class ProductAttributeCore extends \ObjectModel
{
    /** @var int Group id which attribute belongs */
    public $id_attribute_group;
    /** @var string|string[] Name */
    public $name;
    /** @var string */
    public $color;
    /** @var int */
    public $position;
    /** @todo Find type */
    public $default;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'attribute', 'primary' => 'id_attribute', 'multilang' => \true, 'fields' => [
        'id_attribute_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'color' => ['type' => self::TYPE_STRING, 'validate' => 'isColor'],
        'position' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 128],
    ]];
    /** @var string */
    protected $image_dir = \_PS_COL_IMG_DIR_;
    /** @var array Web service parameters */
    protected $webserviceParameters = ['objectsNodeName' => 'product_option_values', 'objectNodeName' => 'product_option_value', 'fields' => ['id_attribute_group' => ['xlink_resource' => 'product_options']]];
    /**
     * AttributeCore constructor.
     *
     * @param int|null $id Attribute ID
     * @param int|null $idLang Language ID
     * @param int|null $idShop Shop ID
     */
    public function __construct($id = \null, $idLang = \null, $idShop = \null)
    {
    }
    /**
     * @see ObjectModel::delete()
     */
    public function delete()
    {
    }
    /**
     * @see ObjectModel::update()
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Adds current ProductAttribute as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` column
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Whether the ProductAttribute has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * Get all attributes for a given language.
     *
     * @param int $idLang Language ID
     * @param bool $notNull Get only not null fields if true
     *
     * @return array Attributes
     */
    public static function getAttributes($idLang, $notNull = \false)
    {
    }
    /**
     * Check if the given name is an Attribute within the given AttributeGroup.
     *
     * @param int $idAttributeGroup AttributeGroup
     * @param string $name Attribute name
     * @param int $idLang Language ID
     *
     * @return array|bool
     */
    public static function isAttribute($idAttributeGroup, $name, $idLang)
    {
    }
    /**
     * Get quantity for a given attribute combination
     * Check if quantity is enough to serve the customer.
     *
     * @param int $idProductAttribute Product attribute combination id
     * @param int $qty Quantity needed
     * @param Shop $shop Shop
     *
     * @return bool Quantity is available or not
     */
    public static function checkAttributeQty($idProductAttribute, $qty, \Shop $shop = \null)
    {
    }
    /**
     * Return true if the Attribute is a color.
     *
     * @return bool|int Color is the attribute type
     */
    public function isColorAttribute()
    {
    }
    /**
     * Get minimal quantity for product with attributes quantity.
     *
     * @param int $idProductAttribute Product Attribute ID
     *
     * @return mixed Minimal quantity or false if no result
     */
    public static function getAttributeMinimalQty($idProductAttribute)
    {
    }
    /**
     * Move an attribute inside its group.
     *
     * @param bool $direction Up (1) or Down (0)
     * @param int $position Current position of the attribute
     *
     * @return bool Update result
     */
    public function updatePosition($direction, $position)
    {
    }
    /**
     * Reorder the attribute position within the Attribute group.
     * Call this method after deleting an attribute from a group.
     *
     * @param int $idAttributeGroup Attribute group ID
     * @param bool $useLastAttribute
     *
     * @return bool Whether the result was successfully updated
     */
    public function cleanPositions($idAttributeGroup, $useLastAttribute = \true)
    {
    }
    /**
     * get highest position.
     *
     * Get the highest attribute position from a group attribute
     *
     * @param int $idAttributeGroup AttributeGroup ID
     *
     * @return int $position Position
     * @todo: Shouldn't this be called getHighestPosition instead?
     */
    public static function getHigherPosition($idAttributeGroup)
    {
    }
}
