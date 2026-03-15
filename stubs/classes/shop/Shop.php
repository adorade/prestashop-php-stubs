<?php

/**
 * @since 1.5.0
 */
class ShopCore extends \ObjectModel
{
    /** @var int ID of shop group */
    public $id_shop_group;
    /** @var int ID of shop category */
    public $id_category;
    /** @var string directory name of the selected theme */
    public $theme_name;
    /** @var string Shop name */
    public $name;
    /** @var string Shop color */
    public $color;
    public $active = \true;
    public $deleted;
    /** @var string Physical uri of main url (read only) */
    public $physical_uri;
    /** @var string Virtual uri of main url (read only) */
    public $virtual_uri;
    /** @var string Domain of main url (read only) */
    public $domain;
    /** @var string Domain SSL of main url (read only) */
    public $domain_ssl;
    /** @var ShopGroup|null Shop group object */
    protected $group;
    /**
     * @var Address|null
     */
    public $address;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'shop', 'primary' => 'id_shop', 'fields' => ['active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'deleted' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 64], 'color' => ['type' => self::TYPE_STRING, 'validate' => 'isColor'], 'id_category' => ['type' => self::TYPE_INT, 'required' => \true], 'theme_name' => ['type' => self::TYPE_STRING, 'validate' => 'isThemeName'], 'id_shop_group' => ['type' => self::TYPE_INT, 'required' => \true]]];
    /** @var array|null List of shops cached */
    protected static $shops;
    protected static $asso_tables = [];
    protected static $id_shop_default_tables = [];
    protected static $initialized = \false;
    protected $webserviceParameters = ['fields' => ['id_shop_group' => ['xlink_resource' => 'shop_groups'], 'id_category' => []]];
    /** @var int|null Store the current context of shop (CONTEXT_ALL, CONTEXT_GROUP, CONTEXT_SHOP) */
    protected static $context;
    /** @var int|null ID shop in the current context (will be empty if context is not CONTEXT_SHOP) */
    protected static $context_id_shop;
    /** @var int|null ID shop group in the current context (will be empty if context is CONTEXT_ALL) */
    protected static $context_id_shop_group;
    /** @var ShopGroup|null Context shop group kept as cache */
    protected static $context_shop_group = \null;
    /** @var bool|null is multistore activated */
    protected static $feature_active;
    /** @var Theme * */
    public $theme;
    /**
     * There are 3 kinds of shop context : shop, group shop and general.
     */
    public const CONTEXT_SHOP = 1;
    public const CONTEXT_GROUP = 2;
    public const CONTEXT_ALL = 4;
    /**
     * Some data can be shared between shops, like customers or orders.
     */
    public const SHARE_CUSTOMER = 'share_customer';
    public const SHARE_ORDER = 'share_order';
    public const SHARE_STOCK = 'share_stock';
    /**
     * On shop instance, get its URL data.
     *
     * @param int $id
     * @param int $id_lang
     * @param int $id_shop
     */
    public function __construct($id = \null, $id_lang = \null, $id_shop = \null)
    {
    }
    /**
     * Initialize an array with all the multistore associations in the database.
     */
    protected static function init()
    {
    }
    public function setUrl()
    {
    }
    /**
     * Add a shop, and clear the cache.
     *
     * @param bool $autodate
     * @param bool $null_values
     *
     * @return bool
     */
    public function add($autodate = \true, $null_values = \false)
    {
    }
    public function associateSuperAdmins()
    {
    }
    /**
     * Remove a shop only if it has no dependencies, and remove its associations.
     *
     * @return bool
     */
    public function delete()
    {
    }
    /**
     * Detect dependency with customer or orders.
     *
     * @param int $id_shop
     *
     * @return bool
     */
    public static function hasDependency($id_shop)
    {
    }
    /**
     * Find the shop from current domain / uri and get an instance of this shop
     * if INSTALL_VERSION is defined, will return an empty shop object.
     *
     * @return Shop
     */
    public static function initialize()
    {
    }
    /**
     * @return Address the current shop address
     */
    public function getAddress()
    {
    }
    /**
     * Set shop theme details from Json data.
     */
    public function setTheme()
    {
    }
    /**
     * Get shop URI.
     *
     * @return string
     */
    public function getBaseURI()
    {
    }
    /**
     * Get shop URL.
     *
     * @param bool $auto_secure_mode if set to true, secure mode will be checked
     * @param bool $add_base_uri if set to true, shop base uri will be added
     *
     * @return string|bool complete base url of current shop
     */
    public function getBaseURL($auto_secure_mode = \true, $add_base_uri = \true)
    {
    }
    /**
     * Get group of current shop.
     *
     * @return ShopGroup
     */
    public function getGroup()
    {
    }
    /**
     * Get root category of current shop.
     *
     * @return int
     */
    public function getCategory()
    {
    }
    /**
     * Get list of shop's urls.
     *
     * @return array
     */
    public function getUrls()
    {
    }
    /**
     * Check if current shop ID is the same as default shop in configuration.
     *
     * @return bool
     */
    public function isDefaultShop()
    {
    }
    /**
     * Get the associated table if available.
     *
     * @return array|false
     */
    public static function getAssoTable($table)
    {
    }
    /**
     * check if the table has an id_shop_default.
     *
     * @return bool
     */
    public static function checkIdShopDefault($table)
    {
    }
    /**
     * Get list of associated tables to shop.
     *
     * @return array
     */
    public static function getAssoTables()
    {
    }
    /**
     * Add table associated to shop.
     *
     * @param string $table_name
     * @param array $table_details
     *
     * @return bool
     */
    public static function addTableAssociation($table_name, $table_details)
    {
    }
    /**
     * Check if given table is associated to shop.
     *
     * @param string $table
     *
     * @return bool
     */
    public static function isTableAssociated($table)
    {
    }
    /**
     * Load list of groups and shops, and cache it.
     *
     * @param bool $refresh
     */
    public static function cacheShops($refresh = \false)
    {
    }
    public static function getCompleteListOfShopsID()
    {
    }
    /**
     * Get shops list.
     *
     * @param bool $active
     * @param int $id_shop_group
     * @param bool $get_as_list_id
     *
     * @return array
     */
    public static function getShops($active = \true, $id_shop_group = \null, $get_as_list_id = \false)
    {
    }
    public function getUrlsSharedCart()
    {
    }
    /**
     * Get a collection of shops.
     *
     * @param bool $active
     * @param int $id_shop_group
     *
     * @return PrestaShopCollection Collection of Shop
     */
    public static function getShopsCollection($active = \true, $id_shop_group = \null)
    {
    }
    /**
     * Return some informations cached for one shop.
     *
     * @param int $shop_id
     *
     * @return array|bool
     */
    public static function getShop($shop_id)
    {
    }
    /**
     * Return a shop ID from shop name.
     *
     * @param string $name
     *
     * @return int|bool
     */
    public static function getIdByName($name)
    {
    }
    /**
     * @param bool $active
     * @param int $id_shop_group
     *
     * @return int Total of shops
     */
    public static function getTotalShops($active = \true, $id_shop_group = \null)
    {
    }
    /**
     * Retrieve group ID of a shop.
     *
     * @param int $shop_id Shop ID
     * @param bool $as_id
     *
     * @return int|array|bool Group ID
     */
    public static function getGroupFromShop($shop_id, $as_id = \true)
    {
    }
    /**
     * If the shop group has the option $type activated, get all shops ID of this group, else get current shop ID.
     *
     * @param int $shop_id
     * @param string $type Shop::SHARE_CUSTOMER | Shop::SHARE_ORDER
     *
     * @return array
     */
    public static function getSharedShops($shop_id, $type)
    {
    }
    /**
     * Get a list of ID concerned by the shop context (E.g. if context is shop group, get list of children shop ID).
     *
     * @param bool|string $share If false, dont check share datas from group. Else can take a Shop::SHARE_* constant value
     *
     * @return array
     */
    public static function getContextListShopID($share = \false)
    {
    }
    /**
     * Return the list of shop by id.
     *
     * @param int $id
     * @param string $identifier
     * @param string $table
     *
     * @return array
     */
    public static function getShopById($id, $identifier, $table)
    {
    }
    /**
     * Change the current shop context.
     *
     * @param int $type Shop::CONTEXT_ALL | Shop::CONTEXT_GROUP | Shop::CONTEXT_SHOP
     * @param int $id ID shop if CONTEXT_SHOP or id shop group if CONTEXT_GROUP
     */
    public static function setContext($type, $id = \null)
    {
    }
    /**
     * Get current context of shop.
     *
     * @return int
     */
    public static function getContext()
    {
    }
    public static function resetStaticCache()
    {
    }
    /**
     * Reset current context of shop.
     */
    public static function resetContext()
    {
    }
    /**
     * @return int
     */
    public function getContextType()
    {
    }
    /**
     * Get current ID of shop if context is CONTEXT_SHOP.
     *
     * @return int|null
     */
    public static function getContextShopID($null_value_without_multishop = \false)
    {
    }
    /**
     * @return int
     */
    public function getContextualShopId()
    {
    }
    /**
     * Get current ID of shop group if context is CONTEXT_SHOP or CONTEXT_GROUP.
     *
     * @return int|null
     */
    public static function getContextShopGroupID($null_value_without_multishop = \false)
    {
    }
    public static function getContextShopGroup()
    {
    }
    /**
     * Add an sql restriction for shops fields.
     *
     * @param bool|int|string $share If false, dont check share datas from group. Else can take a Shop::SHARE_* constant value
     * @param string|null $alias
     */
    public static function addSqlRestriction($share = \false, $alias = \null)
    {
    }
    /**
     * Add an SQL JOIN in query between a table and its associated table in multishop.
     *
     * @param string $table Table name (E.g. product, module, etc.)
     * @param string $alias Alias of table
     * @param bool $inner_join Use or not INNER JOIN
     * @param string $on
     *
     * @return string
     */
    public static function addSqlAssociation($table, $alias, $inner_join = \true, $on = \null, $force_not_default = \false)
    {
    }
    /**
     * Add a restriction on id_shop for multishop lang table.
     *
     * @param string|null $alias
     * @param string|int|null $id_shop
     *
     * @return string
     */
    public static function addSqlRestrictionOnLang($alias = \null, $id_shop = \null)
    {
    }
    /**
     * Get all groups and associated shops as subarrays.
     *
     * @return array
     */
    public static function getTree()
    {
    }
    /**
     * @return bool Return true if multishop feature is active and at last 2 shops have been created
     */
    public static function isFeatureActive()
    {
    }
    public function copyShopData($old_id, $tables_import = \false, $deleted = \false)
    {
    }
    /**
     * @param int $id
     *
     * @return array
     */
    public static function getCategories($id = 0, $only_id = \true)
    {
    }
    /**
     * @param string $entity
     * @param int $id_shop
     *
     * @return array|bool
     */
    public static function getEntityIds($entity, $id_shop, $active = \false, $delete = \false)
    {
    }
}
