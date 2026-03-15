<?php

/**
 * @since 1.5.0
 */
class HelperListCore extends \Helper
{
    /** @var int size which is used for lists image thumbnail generation. */
    public const LIST_THUMBNAIL_SIZE = 45;
    /** @var array Cache for query results */
    protected $_list = [];
    /** @var int Number of results in list */
    public $listTotal = 0;
    /** @var array WHERE clause determined by filter fields */
    protected $_filter;
    /** @var array Number of results in list per page (used in select field) */
    public $_pagination = [20, 50, 100, 300, 1000];
    /** @var int Default number of results in list per page */
    public $_default_pagination = 50;
    /** @var string|null ORDER BY clause determined by field/arrows in list header */
    public $orderBy;
    /** @var bool|string Default ORDER BY clause when `$orderBy` is not defined */
    public $_defaultOrderBy = \false;
    /** @var array : list of vars for button delete */
    public $tpl_delete_link_vars = [];
    /** @var string|null Order way (ASC, DESC) determined by arrows in list header */
    public $orderWay;
    public $identifier;
    protected $deleted = 0;
    /** @var array use to cache texts in current language */
    public static $cache_lang = [];
    public $is_cms = \false;
    public $position_identifier;
    public $table_id;
    /** @var string */
    public $title_icon = \null;
    /**
     * @var array Customize list display
     *
     * align  : determine value alignment
     * prefix : displayed before value
     * suffix : displayed after value
     * image  : object image
     * icon   : icon determined by values
     * active : allow to toggle status
     */
    protected $fields_list;
    /** @var bool Content line is clickable if true */
    public $no_link = \false;
    /** @var Smarty_Internal_Template|string */
    protected $header_tpl = 'list_header.tpl';
    /** @var Smarty_Internal_Template|string */
    protected $content_tpl = 'list_content.tpl';
    /** @var Smarty_Internal_Template|string */
    protected $footer_tpl = 'list_footer.tpl';
    /** @var array list of required actions for each list row */
    public $actions = [];
    /** @var array list of row ids associated with a given action for witch this action have to not be available */
    public $list_skip_actions = [];
    public $bulk_actions = \false;
    public $force_show_bulk_actions = \false;
    public $force_hide_bulk_actions_btn = \false;
    public $specificConfirmDelete = \null;
    public $colorOnBackground;
    /** @var bool If true, activates color on hover */
    public $row_hover = \true;
    /** @var string|null If not null, a title will be added on that list */
    public $title = \null;
    /** @var bool ask for simple header : no filters, no paginations and no sorting */
    public $simple_header = \false;
    public $ajax_params = [];
    public $page;
    /**
     * @var string
     */
    public $shopLinkType;
    /**
     * @var string Image type
     */
    public $imageType;
    /**
     * @var string|null
     */
    public $list_id;
    /**
     * Property introduced for horizontal migration.
     * It ensures the list form filters and sorting can use framework index url instead of legacy one
     *
     * @var string|null
     */
    public $frameworkIndexUrl;
    /**
     * Raw sql query string of a list
     *
     * @var string|null
     */
    public $sql;
    /**
     * You can use $controllerMapping to add entity/controller mapping in order to have migrated links
     * in a legacy list (this requires to have correctly set the _legacy_link in the routing of course)
     *
     * exemple: $helper = new HelperList(['cart' => 'AdminCarts']);
     *
     * @param array $controllerMapping
     */
    public function __construct(array $controllerMapping = [])
    {
    }
    /**
     * Return an html list given the data to fill it up.
     *
     * @param array|bool $list entries to display (rows)
     * @param array $fields_display fields (cols)
     *
     * @return string|bool
     */
    public function generateList($list, $fields_display)
    {
    }
    /**
     * Fetch the template for action enable.
     *
     * @param string $token
     * @param string $id
     * @param int $value state enabled or not
     * @param string $active status
     * @param int $id_category
     * @param int $id_product
     *
     * @return string
     */
    public function displayEnableLink($token, $id, $value, $active, $id_category = \null, $id_product = \null, $ajax = \false)
    {
    }
    public function displayListContent()
    {
    }
    /**
     * Display duplicate action link.
     */
    public function displayDuplicateLink($token, $id, $name = \null)
    {
    }
    /**
     * Display action show details of a table row
     * This action need an ajax request with a return like this:
     *   {
     *     use_parent_structure: true // If false, data need to be an html
     *     data:
     *       [
     *         {field_name: 'value'}
     *       ],
     *     fields_display: // attribute $fields_list of the admin controller
     *   }
     * or somethins like this:
     *   {
     *     use_parent_structure: false // If false, data need to be an html
     *     data:
     *       '<p>My html content</p>',
     *     fields_display: // attribute $fields_list of the admin controller
     *   }.
     */
    public function displayDetailsLink($token, $id, $name = \null)
    {
    }
    /**
     * Display view action link.
     */
    public function displayViewLink($token, $id, $name = \null)
    {
    }
    /**
     * Display edit action link.
     */
    public function displayEditLink($token, $id, $name = \null)
    {
    }
    /**
     * Display delete action link.
     */
    public function displayDeleteLink($token, $id, $name = \null)
    {
    }
    /**
     * Display default action link.
     */
    public function displayDefaultLink($token, $id, $name = \null)
    {
    }
    /**
     * Display list header (filtering, pagination and column names).
     */
    public function displayListHeader()
    {
    }
    public function hasBulkActions($has_value = \false)
    {
    }
    /**
     * Close list table and submit button.
     */
    public function displayListFooter()
    {
    }
    /**
     * @param string|null $token
     * @param int $id
     *
     * @return string
     *
     * @throws BuilderNotFoundException
     * @throws PrestaShopException
     */
    protected function getViewLink($token, $id)
    {
    }
    /**
     * @param string|null $token
     * @param int $id
     *
     * @return string
     *
     * @throws BuilderNotFoundException
     * @throws PrestaShopException
     */
    protected function getEditLink($token, $id)
    {
    }
    /**
     * @param string|null $token
     * @param int $id
     *
     * @return array
     */
    protected function buildLinkParameters($token, $id)
    {
    }
}
