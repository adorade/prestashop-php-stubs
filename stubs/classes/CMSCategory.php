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
class CMSCategoryCore extends \ObjectModel
{
    public $id;
    /** @var int CMSCategory ID */
    public $id_cms_category;
    /** @var string|array<int, string> Name */
    public $name;
    /** @var bool Status for display */
    public $active = \true;
    /** @var string|array<int, string> Description */
    public $description;
    /** @var int Parent CMSCategory ID */
    public $id_parent;
    /** @var int category position */
    public $position;
    /** @var int Parents number */
    public $level_depth;
    /** @var string|array<int, string> string used in rewrited URL */
    public $link_rewrite;
    /** @var string|array<int, string> Meta title */
    public $meta_title;
    /** @var string|array<int, string> Meta keywords */
    public $meta_keywords;
    /** @var string|array<int, string> Meta description */
    public $meta_description;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    protected static $_links = [];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'cms_category', 'primary' => 'id_cms_category', 'multilang' => \true, 'multilang_shop' => \true, 'fields' => [
        'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => \true],
        'id_parent' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => \true],
        'position' => ['type' => self::TYPE_INT],
        'level_depth' => ['type' => self::TYPE_INT],
        'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCatalogName', 'required' => \true, 'size' => 64],
        'link_rewrite' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isLinkRewrite', 'required' => \true, 'size' => 64],
        'description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => 4194303],
        'meta_title' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'meta_description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 512],
        'meta_keywords' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
    ]];
    public function add($autodate = \true, $null_values = \false)
    {
    }
    public function update($null_values = \false)
    {
    }
    /**
     * Recursive scan of subcategories.
     *
     * @param int $max_depth Maximum depth of the tree (i.e. 2 => 3 levels depth)
     * @param int $currentDepth specify the current depth in the tree (don't use it, only for rucursivity!)
     * @param int|null $id_lang Specify the id of the language used
     * @param array|null $excluded_ids_array specify a list of ids to exclude of results
     * @param Link|null $link
     *
     * @return array Subcategories lite tree
     */
    public function recurseLiteCategTree($max_depth = 3, $currentDepth = 0, $id_lang = \null, $excluded_ids_array = \null, \Link $link = \null)
    {
    }
    public static function getRecurseCategory($id_lang = \null, $current = 1, $active = 1, $links = 0, \Link $link = \null)
    {
    }
    public static function recurseCMSCategory($categories, $current, $id_cms_category = 1, $id_selected = 1, $is_html = 0)
    {
    }
    /**
     * Recursively add specified CMSCategory childs to $toDelete array.
     *
     * @param array $to_delete Array reference where categories ID will be saved
     * @param array|int $id_cms_category Parent CMSCategory ID
     */
    protected function recursiveDelete(&$to_delete, $id_cms_category)
    {
    }
    public function delete()
    {
    }
    /**
     * Delete several categories from database.
     *
     * return boolean Deletion result
     */
    public function deleteSelection($categories)
    {
    }
    /**
     * Get the number of parent categories.
     *
     * @return int Level depth
     */
    public function calcLevelDepth()
    {
    }
    /**
     * Return available categories.
     *
     * @param int $id_lang Language ID
     * @param bool $active return only active categories
     *
     * @return array Categories
     */
    public static function getCategories($id_lang, $active = \true, $order = \true)
    {
    }
    public static function getSimpleCategories($id_lang)
    {
    }
    /**
     * Return current CMSCategory childs.
     *
     * @param int $id_lang Language ID
     * @param bool $active return only active categories
     *
     * @return array Categories
     */
    public function getSubCategories($id_lang, $active = \true)
    {
    }
    /**
     * Hide CMSCategory prefix used for position.
     *
     * @param string $name CMSCategory name
     *
     * @return string Name without position
     */
    public static function hideCMSCategoryPosition($name)
    {
    }
    /**
     * Return main categories.
     *
     * @param int $id_lang Language ID
     * @param bool $active return only active categories
     *
     * @return array categories
     */
    public static function getHomeCategories($id_lang, $active = \true)
    {
    }
    public static function getChildren($id_parent, $id_lang, $active = \true)
    {
    }
    /**
     * Check if CMSCategory can be moved in another one.
     *
     * @param int $id_parent Parent candidate
     *
     * @return bool Parent validity
     */
    public static function checkBeforeMove($id_cms_category, $id_parent)
    {
    }
    public static function getLinkRewrite($id_cms_category, $id_lang)
    {
    }
    public function getLink(\Link $link = \null)
    {
    }
    public function getName($id_lang = \null)
    {
    }
    /**
     * Light back office search for categories.
     *
     * @param int $id_lang Language ID
     * @param string $query Searched string
     * @param bool $unrestricted allows search without lang and includes first CMSCategory and exact match
     *
     * @return array Corresponding categories
     */
    public static function searchByName($id_lang, $query, $unrestricted = \false)
    {
    }
    /**
     * Get Each parent CMSCategory of this CMSCategory until the root CMSCategory.
     *
     * @param int $id_lang Language ID
     *
     * @return array Corresponding categories
     */
    public function getParentsCategories($id_lang = \null)
    {
    }
    public function updatePosition($way, $position)
    {
    }
    public static function cleanPositions($id_category_parent)
    {
    }
    public static function getLastPosition($id_category_parent)
    {
    }
    public static function getUrlRewriteInformations($id_category)
    {
    }
}
