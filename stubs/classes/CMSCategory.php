<?php

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
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCatalogName', 'required' => \true, 'size' => 128],
        'link_rewrite' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isLinkRewrite', 'required' => \true, 'size' => 128],
        'description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4],
        'meta_title' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'meta_description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 512],
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
    public function recurseLiteCategTree($max_depth = 3, $currentDepth = 0, $id_lang = \null, $excluded_ids_array = \null, ?\Link $link = \null)
    {
    }
    public static function getRecurseCategory($id_lang = \null, $current = 1, $active = 1, $links = 0, ?\Link $link = \null)
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
    protected function recursiveDelete(array &$to_delete, $id_cms_category)
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
    public function deleteSelection(array $categories)
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
    public static function getCategories($id_lang, bool $active = \true, $order = \true)
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
    public function getSubCategories(int $id_lang, bool $active = \true)
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
    public static function getChildren($id_parent, $id_lang, bool $active = \true)
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
    public function getLink(?\Link $link = \null)
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
    /**
     * Returns the next position to use for a new CMS category.
     * CMS category positions start with 0.
     * Returns position of the last CMS category within that category + 1,
     * 0 if there are no CMS categories.
     *
     * @param int $idParentCmsCategory ID of the parent CMS category
     *
     * @return int Position to use
     */
    public static function getLastPosition($idParentCmsCategory)
    {
    }
}
