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
 * Class CategoryCore.
 */
class CategoryCore extends \ObjectModel
{
    public $id;
    /** @var int category ID */
    public $id_category;
    /** @var mixed string or array of Name */
    public $name;
    /** @var bool Status for display */
    public $active = \true;
    /** @var int category position */
    public $position;
    /** @var mixed string or array of Description */
    public $description;
    /** @var mixed string or array of Additional description */
    public $additional_description;
    /** @var int Parent category ID */
    public $id_parent;
    /** @var int default Category id */
    public $id_category_default;
    /** @var int|null Parents number */
    public $level_depth;
    /** @var int Nested tree model "left" value */
    public $nleft;
    /** @var int Nested tree model "right" value */
    public $nright;
    /** @var mixed string or array of string used in rewrited URL */
    public $link_rewrite;
    /** @var mixed string or array of Meta title */
    public $meta_title;
    /** @var mixed string or array of Meta keywords */
    public $meta_keywords;
    /** @var mixed string or array of Meta description */
    public $meta_description;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var bool is Category Root */
    public $is_root_category;
    /** @var int */
    public $id_shop_default;
    public $groupBox;
    /** @var bool */
    public $doNotRegenerateNTree = \false;
    protected static $_links = [];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'category', 'primary' => 'id_category', 'multilang' => \true, 'multilang_shop' => \true, 'fields' => [
        'nleft' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'nright' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'level_depth' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => \true],
        'id_parent' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'id_shop_default' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        'is_root_category' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'position' => ['type' => self::TYPE_INT],
        'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCatalogName', 'required' => \true, 'size' => 128],
        'link_rewrite' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isLinkRewrite', 'required' => \true, 'size' => 128, 'ws_modifier' => ['http_method' => \WebserviceRequest::HTTP_POST, 'modifier' => 'modifierWsLinkRewrite']],
        'description' => ['type' => self::TYPE_HTML, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => 4194303],
        'additional_description' => ['type' => self::TYPE_HTML, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => 4194303],
        'meta_title' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'meta_description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 512],
        'meta_keywords' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
    ]];
    /** @var string|int|bool id_image is the category ID when an image exists and 'default' otherwise */
    public $id_image = 'default';
    protected $webserviceParameters = ['objectsNodeName' => 'categories', 'hidden_fields' => ['nleft', 'nright', 'groupBox'], 'fields' => ['id_parent' => ['xlink_resource' => 'categories'], 'level_depth' => ['setter' => \false], 'nb_products_recursive' => ['getter' => 'getWsNbProductsRecursive', 'setter' => \false]], 'associations' => ['categories' => ['getter' => 'getChildrenWs', 'resource' => 'category'], 'products' => ['getter' => 'getProductsWs', 'resource' => 'product']]];
    /**
     * CategoryCore constructor.
     *
     * @param int|null $idCategory
     * @param int|null $idLang
     * @param int|null $idShop
     */
    public function __construct($idCategory = \null, $idLang = \null, $idShop = \null)
    {
    }
    /**
     * Get the clean description without HTML tags and slashes.
     *
     * @param string $description Category description with HTML
     *
     * @return string Category description without HTML
     */
    public static function getDescriptionClean($description)
    {
    }
    /**
     * Adds current Category as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Category has been successfully added
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
     * @return bool Indicates whether the CartRule has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Recursive scan of subcategories.
     *
     * @param int $maxDepth Maximum depth of the tree (i.e. 2 => 3 levels depth)
     * @param int $currentDepth specify the current depth in the tree (don't use it, only for recursive calls!)
     * @param int $idLang Specify the id of the language used
     * @param array $excludedIdsArray Specify a list of IDs to exclude of results
     * @param string $format
     *
     * @return array Subcategories lite tree
     */
    public function recurseLiteCategTree($maxDepth = 3, $currentDepth = 0, $idLang = \null, $excludedIdsArray = \null, $format = 'default')
    {
    }
    /**
     * Recursively add specified category childs to $to_delete array.
     *
     * @param array $toDelete Array reference where categories ID will be saved
     * @param int $idCategory Parent category ID
     */
    protected function recursiveDelete(&$toDelete, $idCategory)
    {
    }
    /**
     * Delete this object
     * Skips the deletion procedure of Category and directly calls
     * the delete() method of ObjectModel instead.
     *
     * @return bool Indicates whether this Category was successfully deleted
     */
    public function deleteLite()
    {
    }
    /**
     * Deletes current Category from the database.
     *
     * @return bool `true` if successfully deleted
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Delete selected categories from database.
     *
     * @param array $idCategories Category IDs to delete
     *
     * @return bool Deletion result
     */
    public function deleteSelection($idCategories)
    {
    }
    /**
     * Get the depth level for the category.
     *
     * @return int Depth level
     *
     * @throws PrestaShopException
     */
    public function calcLevelDepth()
    {
    }
    /**
     * Re-calculate the values of all branches of the nested tree.
     */
    public static function regenerateEntireNtree()
    {
    }
    /**
     * @param array $categories
     * @param int $idCategory
     * @param int $n
     *
     * @return array ntree infos
     */
    protected static function computeNTreeInfos(&$categories, $idCategory, &$n)
    {
    }
    /**
     * @param array $categories
     * @param int $idCategory
     * @param int $n
     *
     * @return bool Indicates whether the sub tree of categories has been successfully updated
     *
     * @deprecated 1.7.6.0 use computeNTreeInfos + sql query instead
     */
    protected static function subTree(&$categories, $idCategory, &$n)
    {
    }
    /**
     * Updates `level_depth` for all children of the given `id_category`.
     *
     * @param int $idParentCategory Parent Category ID
     *
     * @throws PrestaShopException
     */
    public function recalculateLevelDepth($idParentCategory)
    {
    }
    /**
     * Return available categories.
     *
     * @param bool|int $idLang Language ID
     * @param bool $active Only return active categories
     * @param bool $order Order the results
     * @param string $sqlFilter Additional SQL clause(s) to filter results
     * @param string $orderBy Change the default order by
     * @param string $limit Set the limit
     *                      Both the offset and limit can be given
     *
     * @return array Categories
     */
    public static function getCategories($idLang = \false, $active = \true, $order = \true, $sqlFilter = '', $orderBy = '', $limit = '')
    {
    }
    /**
     * @param int $categoryId
     *
     * @return int
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getParentId(int $categoryId): int
    {
    }
    /**
     * @param int $idRootCategory ID of root Category
     * @param int|bool $idLang Language ID `false` if language filter should not be applied
     * @param bool $active Only return active categories
     * @param array|string|null $groups
     * @param bool $useShopRestriction Restrict to current Shop
     * @param string $sqlFilter Additional SQL clause(s) to filter results
     * @param string $orderBy Change the default order by
     * @param string $limit Set the limit Both the offset and limit can be given
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null Array with `id_category` and `name`
     */
    public static function getAllCategoriesName($idRootCategory = \null, $idLang = \false, $active = \true, $groups = \null, $useShopRestriction = \true, $sqlFilter = '', $orderBy = '', $limit = '')
    {
    }
    /**
     * Get nested categories.
     *
     * @param int|null $idRootCategory Root Category ID
     * @param int|bool $idLang Language ID
     *                         `false` if language filter should not be used
     * @param bool $active Whether the category must be active
     * @param array|string|null $groups
     * @param bool $useShopRestriction Restrict to current Shop
     * @param string $sqlFilter Additional SQL clause(s) to filter results
     * @param string $orderBy Change the default order by
     * @param string $limit Set the limit
     *                      Both the offset and limit can be given
     *
     * @return array|null
     */
    public static function getNestedCategories($idRootCategory = \null, $idLang = \false, $active = \true, $groups = \null, $useShopRestriction = \true, $sqlFilter = '', $orderBy = '', $limit = '')
    {
    }
    /**
     * Get a simple list of categories with id_category and name for each Category.
     *
     * @param int $idLang Language ID
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getSimpleCategories($idLang)
    {
    }
    /**
     * Get a simple list of categories with id_category, name and id_parent infos
     * It also takes into account the root category of the current shop.
     *
     * @param int $idLang Language ID
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getSimpleCategoriesWithParentInfos($idLang)
    {
    }
    /**
     * Return current category childs.
     *
     * @param int $idLang Language ID
     * @param bool $active return only active categories
     *
     * @return array Categories
     */
    public function getSubCategories($idLang, $active = \true)
    {
    }
    /**
     * Returns category products.
     *
     * @param int $idLang Language ID
     * @param int $pageNumber Page number
     * @param int $productPerPage Number of products per page
     * @param string|null $orderBy ORDER BY column
     * @param string|null $orderWay Order way
     * @param bool $getTotal If set to true, returns the total number of results only
     * @param bool $active If set to true, finds only active products
     * @param bool $random If true, sets a random filter for returned products
     * @param int $randomNumberProducts Number of products to return if random is activated
     * @param bool $checkAccess If set to `true`, check if the current customer
     *                          can see the products from this category
     * @param Context|null $context Instance of Context
     *
     * @return array|int|false Products, number of products or false (no access)
     *
     * @throws PrestaShopDatabaseException
     */
    public function getProducts($idLang, $pageNumber, $productPerPage, $orderBy = \null, $orderWay = \null, $getTotal = \false, $active = \true, $random = \false, $randomNumberProducts = 1, $checkAccess = \true, \Context $context = \null)
    {
    }
    /**
     * Return main categories.
     *
     * @param int $idLang Language ID
     * @param bool $active return only active categories
     *
     * @return array categories
     */
    public static function getHomeCategories($idLang, $active = \true, $idShop = \false)
    {
    }
    /**
     * Get root Category object
     * Returns the top Category if there are multiple root Categories.
     *
     * @param int|null $idLang Language ID
     * @param Shop|null $shop Shop object
     *
     * @return Category object
     */
    public static function getRootCategory($idLang = \null, \Shop $shop = \null)
    {
    }
    /**
     * Get children of the given Category.
     *
     * @param int $idParent Parent Category ID
     * @param int $idLang Language ID
     * @param bool $active Active children only
     * @param bool $idShop Shop ID
     *
     * @return array Children of given Category
     */
    public static function getChildren($idParent, $idLang, $active = \true, $idShop = \false)
    {
    }
    /**
     * Check if the given Category has child categories.
     *
     * @param int $idParent Parent Category ID
     * @param int $idLang Language ID
     * @param bool $active Active children only
     * @param bool $idShop Shop ID
     *
     * @return bool Indicates whether the given Category has children
     */
    public static function hasChildren($idParent, $idLang, $active = \true, $idShop = \false)
    {
    }
    /**
     * Return an array of all children of the current category.
     *
     * @param int $idLang Language ID
     *
     * @return PrestaShopCollection Collection of Category
     */
    public function getAllChildren($idLang = \null)
    {
    }
    /**
     * Return an ordered array of all parents of the current category.
     *
     * @param int $idLang
     *
     * @return PrestaShopCollection Collection of Category
     */
    public function getAllParents($idLang = \null)
    {
    }
    /**
     * This method allow to return children categories with the number of sub children selected for a product.
     *
     * @param int $idParent Parent Category ID
     * @param string $selectedCategory Selected SubCategory ID
     * @param int $idLang Language ID
     * @param Shop $shop Shop ID
     * @param bool $useShopContext Limit to current Shop
     *
     * @return array
     *
     * @internal param int $id_product Product ID
     */
    public static function getChildrenWithNbSelectedSubCat($idParent, $selectedCategory, $idLang, \Shop $shop = \null, $useShopContext = \true)
    {
    }
    /**
     * Copy products from a category to another.
     *
     * @param int $idOld Source category ID
     * @param int $idNew Destination category ID
     *
     * @return bool Duplication result
     */
    public static function duplicateProductCategories($idOld, $idNew)
    {
    }
    /**
     * Check if category can be moved in another one.
     * The category cannot be moved in a child category.
     *
     * @param int $idCategory Current category
     * @param int $idParent Parent candidate
     *
     * @return bool Parent validity
     */
    public static function checkBeforeMove($idCategory, $idParent)
    {
    }
    /**
     * Get the rewrite link of the given Category.
     *
     * @param int $idCategory Category ID
     * @param int $idLang Language ID
     *
     * @return bool|mixed
     */
    public static function getLinkRewrite($idCategory, $idLang)
    {
    }
    /**
     * Get link to this category.
     *
     * @param Link|null $link Link instance
     * @param int|null $idLang Language ID
     *
     * @return string FO URL to this Category
     */
    public function getLink(\Link $link = \null, $idLang = \null)
    {
    }
    /**
     * Get category name in given Language.
     *
     * @param int|null $idLang Language ID
     *
     * @return string Category name
     */
    public function getName($idLang = \null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function resetStaticCache(): void
    {
    }
    /**
     * Light back office search for categories.
     *
     * @param int $idLang Language ID
     * @param string $query Searched string
     * @param bool $unrestricted Allows search without lang and includes first category and exact match
     * @param bool $skipCache Skip the Cache
     *
     * @return array Corresponding categories
     *
     * @throws PrestaShopDatabaseException
     */
    public static function searchByName($idLang, $query, $unrestricted = \false, $skipCache = \false)
    {
    }
    /**
     * Retrieve category by name and parent category id.
     *
     * @param int $idLang Language ID
     * @param string $categoryName Searched category name
     * @param int $idParentCategory parent category ID
     *
     * @return array Corresponding category
     */
    public static function searchByNameAndParentCategoryId($idLang, $categoryName, $idParentCategory)
    {
    }
    /**
     * Search with paths for Categories.
     *
     * @param int $idLang Language ID
     * @param string $path Path of category
     * @param object|bool $objectToCreate a category
     * @param string|bool $methodToCreate a category
     *
     * @return array Corresponding categories
     */
    public static function searchByPath($idLang, $path, $objectToCreate = \false, $methodToCreate = \false)
    {
    }
    /**
     * Get Each parent category of this category until the root category.
     *
     * @param int $idLang Language ID
     *
     * @return array Corresponding categories
     */
    public function getParentsCategories($idLang = \null)
    {
    }
    /**
     * Specify if a category already in base.
     *
     * @param int $idCategory Category id
     *
     * @return bool
     */
    public static function categoryExists($idCategory)
    {
    }
    /**
     * Check if all categories by provided ids are present in database.
     * If at least one is missing return false
     *
     * @param int[] $categoryIds
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public static function categoriesExists(array $categoryIds): bool
    {
    }
    /**
     * Clean Category Groups.
     *
     * @return bool Indicated whether the cleanup was successful
     */
    public function cleanGroups()
    {
    }
    /**
     * Remove associated products.
     *
     * @return bool Indicates whether the cleanup was successful
     */
    public function cleanAssoProducts()
    {
    }
    /**
     * Add Category groups.
     *
     * @param array $groups
     */
    public function addGroups($groups)
    {
    }
    /**
     * Get Category groups.
     *
     * @return array|null
     */
    public function getGroups()
    {
    }
    /**
     * Add group if it does not exist.
     *
     * @param int $idGroup Group ID
     *
     * @return bool|void
     */
    public function addGroupsIfNoExist($idGroup)
    {
    }
    /**
     * checkAccess return true if id_customer is in a group allowed to see this category.
     *
     * @param mixed $idCustomer
     *
     * @return bool true if access allowed for customer $id_customer
     */
    public function checkAccess($idCustomer)
    {
    }
    /**
     * Update customer groups associated to the object. Don't update group access if list is null.
     *
     * @param array|null $list groups
     *
     * @return bool
     */
    public function updateGroup($list)
    {
    }
    /**
     * @param int $idGroup
     *
     * @return bool
     */
    public static function setNewGroupForHome($idGroup)
    {
    }
    /**
     * Update the position of the current Category.
     *
     * @param bool $way Indicates whether the Category should move up (`false`) or down (`true`)
     * @param int $position Current Position
     *
     * @return bool
     */
    public function updatePosition($way, $position)
    {
    }
    /**
     * cleanPositions keep order of category in $id_category_parent,
     * but remove duplicate position. Should not be used if positions
     * are clean at the beginning !
     *
     * @param mixed $idCategoryParent
     *
     * @return bool|void true if succeed
     */
    public static function cleanPositions($idCategoryParent = \null)
    {
    }
    /**
     * Returns the number of categories + 1 having $idCategoryParent as parent.
     *
     * @param int $idCategoryParent The parent category
     * @param int $idShop Shop ID
     *
     * @return int Number of categories + 1 having $idCategoryParent as parent
     *
     * @todo     rename that function to make it understandable (getNextPosition for example)
     */
    public static function getLastPosition($idCategoryParent, $idShop)
    {
    }
    /**
     * Get URL Rewrite information.
     *
     * @param int $idCategory
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     *
     * @since 1.7.0
     */
    public static function getUrlRewriteInformation($idCategory)
    {
    }
    /**
     * Return `nleft` and `nright` fields for a given category.
     *
     * @param int $id
     *
     * @return array
     *
     * @since 1.5.0
     */
    public static function getInterval($id)
    {
    }
    /**
     * Check if current category is a child of shop root category.
     *
     * @param Shop $shop
     *
     * @return bool
     *
     * @since 1.5.0
     */
    public function inShop(\Shop $shop = \null)
    {
    }
    /**
     * Check if current category is a child of shop root category.
     *
     * @param int $idCategory Category ID
     * @param Shop $shop Shop object
     *
     * @return bool Indicates whether the current category is a child of the Shop root category
     *
     * @since 1.5.0
     */
    public static function inShopStatic($idCategory, \Shop $shop = \null)
    {
    }
    /**
     * Get Children for the webservice.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getChildrenWs()
    {
    }
    /**
     * Get Products for webservice.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getProductsWs()
    {
    }
    /*
        Create the link rewrite if not exists or invalid on category creation
    */
    public function modifierWsLinkRewrite()
    {
    }
    /**
     * Search for another Category with the same parent and the same position.
     *
     * @return int First Category found
     */
    public function getDuplicatePosition()
    {
    }
    /**
     * Recursively get amount of Products for the webservice.
     *
     * @return false|int|string|null
     */
    public function getWsNbProductsRecursive()
    {
    }
    /**
     * Get Category information.
     *
     * @param array $idsCategory Category IDs
     * @param int $idLang Language ID
     *
     * @return array|false Array with Category information
     *                     `false` if no Category found
     *
     * @since 1.7.0
     */
    public static function getCategoryInformation($idsCategory, $idLang = \null)
    {
    }
    /**
     * Is parent Category available.
     *
     * @return bool Indicates whether the parent Category is available
     */
    public function isParentCategoryAvailable()
    {
    }
    /**
     * Add association between shop and categories.
     *
     * @param int $idShop Shop ID
     *
     * @return bool Indicates whether the association was successfully made
     */
    public function addShop($idShop)
    {
    }
    /**
     * Get root Categories.
     *
     * @param int|null $idLang Language ID
     * @param bool $active Whether the root Category must be active
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null Root Categories
     */
    public static function getRootCategories($idLang = \null, $active = \true)
    {
    }
    /**
     * Get Categories without parent.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null Categories without parent
     */
    public static function getCategoriesWithoutParent()
    {
    }
    /**
     * Is Root Category for a Shop.
     *
     * @return bool Indicates whether the current Category is a Root category for a Shop
     */
    public function isRootCategoryForAShop()
    {
    }
    /**
     * Get Top Category.
     *
     * @param int|null $idLang Language ID
     *
     * @return Category Top Category
     */
    public static function getTopCategory($idLang = \null)
    {
    }
    /**
     * Add position to current Category.
     *
     * @param int $position Position
     * @param int|null $idShop Shop ID
     *
     * @return bool Indicates whether the position was successfully added
     */
    public function addPosition($position, $idShop = \null)
    {
    }
    /**
     * Get Shops by Category ID.
     *
     * @param int $idCategory Category ID
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null Array with Shop IDs
     */
    public static function getShopsByCategory($idCategory)
    {
    }
    /**
     * Update Categories for a shop.
     *
     * @param array $categories Categories list to associate a shop
     * @param int|null $idShop Categories list to associate a shop
     *
     * @return bool Update/insertion result (`false` if not successfully inserted/updated)
     */
    public static function updateFromShop($categories, $idShop)
    {
    }
    /**
     * Delete category from shop $id_shop.
     *
     * @param int $idShop Shop ID
     *
     * @return bool Indicates whether the current Category was successfully removed from the Shop
     */
    public function deleteFromShop($idShop)
    {
    }
    /**
     * Deletes all Categories from the Shop ID.
     *
     * @return bool Indicates whether the Categories have been successfully removed
     */
    public static function deleteCategoriesFromShop($idShop)
    {
    }
    /**
     * Add some categories to a shop.
     *
     * @param array $categories
     *
     * @return bool Indicates whether the Categories were successfully added to the given Shop
     */
    public static function addToShop(array $categories, $idShop)
    {
    }
    /**
     * Does the current Category exists in the given Shop.
     *
     * @param int $idShop Shop ID
     *
     * @return bool Indicates whether the current Category exists in the given Shop
     */
    public function existsInShop($idShop)
    {
    }
    /**
     * Indicates whether a category is ROOT for the shop.
     * The root category is the one with no parent. It's a virtual category.
     *
     * @return bool
     */
    public function isRootCategory(): bool
    {
    }
}
