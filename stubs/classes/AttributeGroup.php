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
 * Class AttributeGroupCore.
 */
class AttributeGroupCore extends \ObjectModel
{
    /** @var string|string[] Name */
    public $name;
    /** @var bool Whether the attribute group is a color group */
    public $is_color_group;
    /** @var int Position */
    public $position;
    /** @var string Group type */
    public $group_type;
    /** @var string|string[] Public Name */
    public $public_name;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'attribute_group', 'primary' => 'id_attribute_group', 'multilang' => \true, 'fields' => [
        'is_color_group' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'group_type' => ['type' => self::TYPE_STRING, 'required' => \true],
        'position' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 128],
        'public_name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 64],
    ]];
    /** @var array Web service parameters */
    protected $webserviceParameters = ['objectsNodeName' => 'product_options', 'objectNodeName' => 'product_option', 'fields' => [], 'associations' => ['product_option_values' => ['resource' => 'product_option_value', 'fields' => ['id' => []]]]];
    /**
     * Adds current AttributeGroup as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` column
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Whether the AttributeGroup has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * Updates the current object in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Whether the AttributeGroup has been succesfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Clean dead combinations
     * A combination is considered dead when its Attribute ID cannot be found.
     *
     * @return bool Whether the dead combinations have been successfully deleted
     */
    public static function cleanDeadCombinations()
    {
    }
    /**
     * Deletes current AttributeGroup from database.
     *
     * @return bool True if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Get all attributes for a given language / group.
     *
     * @param int $idLang Language ID
     * @param int $idAttributeGroup AttributeGroup ID
     *
     * @return array Attributes
     */
    public static function getAttributes($idLang, $idAttributeGroup)
    {
    }
    /**
     * Get all attributes groups for a given language.
     *
     * @param int $idLang Language id
     *
     * @return array Attributes groups
     */
    public static function getAttributesGroups($idLang)
    {
    }
    /**
     * Delete several objects from database.
     *
     * @param array $selection Array with AttributeGroup IDs
     *
     * @return bool Deletion result
     */
    public function deleteSelection($selection)
    {
    }
    /**
     * Set the values of the current AttributeGroup for the webservice.
     *
     * @param array $values
     *
     * @return bool Whether the update was successful
     */
    public function setWsProductOptionValues($values)
    {
    }
    /**
     * Get values of current AttributeGroup instance for the webservice.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getWsProductOptionValues()
    {
    }
    /**
     * Move a group attribute.
     *
     * @param bool $direction Up (1) or Down (0)
     * @param int|null $position
     *
     * @return bool Update result
     */
    public function updatePosition($direction, $position)
    {
    }
    /**
     * Reorder group attribute position
     * Call it after deleting a group attribute.
     *
     * @return bool $return
     */
    public static function cleanPositions()
    {
    }
    /**
     * Get the highest AttributeGroup position.
     *
     * @return int $position Position
     */
    public static function getHigherPosition()
    {
    }
}
