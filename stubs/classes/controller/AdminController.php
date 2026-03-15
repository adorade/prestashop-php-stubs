<?php

class AdminControllerCore extends \Controller
{
    /** @var string */
    public $path;
    /** @var string */
    public static $currentIndex;
    /** @var string */
    public $content;
    /** @var array */
    public $warnings = [];
    /** @var array */
    public $informations = [];
    /** @var array */
    public $confirmations = [];
    /** @var string|false */
    public $shopShareDatas = \false;
    /** @var array */
    public $_languages = [];
    /** @var int */
    public $default_form_language;
    /** @var int */
    public $allow_employee_form_lang;
    /** @var string */
    public $layout = 'layout.tpl';
    /** @var bool */
    public $bootstrap = \false;
    /** @var string|array */
    protected $meta_title = [];
    /** @var string */
    public $template = 'content.tpl';
    /** @var string Associated table name */
    public $table = 'configuration';
    /** @var string|null */
    public $list_id;
    /** @var string|false Object identifier inside the associated table */
    protected $identifier = \false;
    /** @var string */
    protected $identifier_name = 'name';
    /** @var string|null Associated object class name */
    public $className;
    /** @var array */
    public $tabAccess;
    /** @var int Tab id */
    public $id = -1;
    /** @var bool */
    public $required_database = \false;
    /** @var string Security token */
    public $token;
    /** @var string "shop" or "group_shop" */
    public $shopLinkType;
    /** @var string|bool Default ORDER BY clause when `$_orderBy` is not defined */
    protected $_defaultOrderBy = \false;
    /** @var string */
    protected $_defaultOrderWay = 'ASC';
    /** @var array */
    public $tpl_form_vars = [];
    /** @var array */
    public $tpl_list_vars = [];
    /** @var array */
    public $tpl_delete_link_vars = [];
    /** @var array */
    public $tpl_option_vars = [];
    /** @var array */
    public $tpl_view_vars = [];
    /** @var array */
    public $tpl_required_fields_vars = [];
    /** @var string|null */
    public $base_tpl_view = \null;
    /** @var string|null */
    public $base_tpl_form = \null;
    /** @var bool If you want more fieldsets in the form */
    public $multiple_fieldsets = \false;
    /** @var array */
    public $fields_value = [];
    /** @var bool Define if the header of the list contains filter and sorting links or not */
    protected $list_simple_header;
    /** @var array|null List to be generated */
    protected $fields_list;
    /** @var array Modules list filters */
    protected $filter_modules_list = \null;
    /** @var array Modules list filters */
    protected $modules_list = [];
    /** @var array Edit form to be generated */
    protected $fields_form;
    /** @var array Override of `$fields_form` */
    protected $fields_form_override;
    /** @var string Override form action */
    protected $submit_action;
    /** @var array List of option forms to be generated */
    protected $fields_options = [];
    /** @var string */
    protected $shopLink;
    /** @var string SQL query */
    protected $_listsql = '';
    /** @var array Cache for query results */
    protected $_list = [];
    /** @var string MySQL error */
    protected $_list_error;
    /** @var string|array Toolbar title */
    protected $toolbar_title;
    /** @var array|null List of toolbar buttons */
    protected $toolbar_btn = \null;
    /** @var bool Scrolling toolbar */
    protected $toolbar_scroll = \true;
    /** @var bool Set to false to hide toolbar and page title */
    protected $show_toolbar = \true;
    /** @var bool Set to true to show toolbar and page title for options */
    protected $show_toolbar_options = \false;
    /** @var int Number of results in list */
    protected $_listTotal = 0;
    /** @var bool Automatically join language table if true */
    public $lang = \false;
    /** @var array|bool|null WHERE clause determined by filter fields */
    protected $_filter;
    /** @var string|null */
    protected $_filterHaving;
    /** @var string Temporary SQL table WHERE clause determined by filter fields */
    protected $_tmpTableFilter = '';
    /** @var array Number of results in list per page (used in select field) */
    protected $_pagination = [20, 50, 100, 300, 1000];
    /** @var int Default number of results in list per page */
    protected $_default_pagination = 50;
    /** @var string|null ORDER BY clause determined by field/arrows in list header */
    protected $_orderBy;
    /** @var string Order way (ASC, DESC) determined by arrows in list header */
    protected $_orderWay;
    /** @var array List of available actions for each list row - default actions are view, edit, delete, duplicate */
    protected $actions_available = ['view', 'edit', 'duplicate', 'delete'];
    /** @var array List of required actions for each list row */
    protected $actions = [];
    /** @var array List of row ids associated with a given action for witch this action have to not be available */
    protected $list_skip_actions = [];
    /** @var bool Don't show header & footer */
    protected $lite_display = \false;
    /** @var bool List content lines are clickable if true */
    protected $list_no_link = \false;
    /** @var bool */
    protected $allow_export = \false;
    /** @var array Cache for translations */
    public static $cache_lang = [];
    /** @var array Required_fields to display in the Required Fields form */
    public $required_fields = [];
    /** @var HelperList */
    protected $helper;
    /** @var string */
    public $override_folder;
    /** @var int DELETE access level */
    public const LEVEL_DELETE = 4;
    /** @var int ADD access level */
    public const LEVEL_ADD = 3;
    /** @var int EDIT access level */
    public const LEVEL_EDIT = 2;
    /** @var int VIEW access level */
    public const LEVEL_VIEW = 1;
    /**
     * Actions to execute on multiple selections.
     *
     * Usage:
     *
     * array(
     *      'actionName' => array(
     *      'text' => $this->trans('Message displayed on the submit button (mandatory)'),
     *      'confirm' => $this->trans('If set, this confirmation message will pop-up (optional)')),
     *      'anotherAction' => array(...)
     * );
     *
     * If your action is named 'actionName', you need to have a method named bulkactionName() that will be executed when the button is clicked.
     *
     * @var array|null
     */
    protected $bulk_actions;
    /** @var array Ids of the rows selected */
    protected $boxes;
    /** @var bool Do not automatically select * anymore but select only what is necessary */
    protected $explicitSelect = \false;
    /** @var string|null Add fields into data query to display list */
    protected $_select;
    /** @var string|null Join tables into data query to display list */
    protected $_join;
    /** @var string|null Add conditions into data query to display list */
    protected $_where;
    /** @var string|null Group rows into data query to display list */
    protected $_group;
    /** @var string|null Having rows into data query to display list */
    protected $_having;
    /** @var string|bool Use SQL_CALC_FOUND_ROWS / FOUND_ROWS to count the number of records */
    protected $_use_found_rows = \true;
    /** @var bool */
    protected $is_cms = \false;
    /** @var string Identifier to use for changing positions in lists (can be omitted if positions cannot be changed) */
    protected $position_identifier;
    /** @var string|int */
    protected $position_group_identifier;
    /** @var bool Table records are not deleted but marked as deleted if set to true */
    protected $deleted = \false;
    /** @var bool Is a list filter set */
    protected $filter;
    /** @var bool */
    protected $noLink;
    /** @var bool|null */
    protected $specificConfirmDelete = \null;
    /** @var bool */
    protected $colorOnBackground;
    /** @var bool If true, activates color on hover */
    protected $row_hover = \true;
    /** @var string Action to perform : 'edit', 'view', 'add', ... */
    protected $action;
    /** @var string|null */
    protected $display;
    /** @var array */
    protected $tab_modules_list = ['default_list' => [], 'slider_list' => []];
    /** @var string */
    public $tpl_folder;
    /** @var string */
    protected $bo_theme;
    /** @var bool Redirect or not after a creation */
    protected $_redirect = \true;
    /** @var array Name and directory where class image are located */
    public $fieldImageSettings = [];
    /** @var string Image type */
    public $imageType = 'jpg';
    /** @var ObjectModel|null Instantiation of the class associated with the AdminController */
    protected $object;
    /** @var int Current object ID */
    protected $id_object;
    /** @var string Current controller name without suffix */
    public $controller_name;
    /** @var int */
    public $multishop_context = -1;
    /** @var bool */
    public $multishop_context_group = \true;
    /** @var array|null Current breadcrumb position as an array of tab names */
    protected $breadcrumbs;
    /** @var bool Bootstrap variable */
    public $show_page_header_toolbar = \false;
    /** @var string Bootstrap variable */
    public $page_header_toolbar_title;
    /** @var array|Traversable Bootstrap variable */
    public $page_header_toolbar_btn = [];
    /** @var bool|null Bootstrap variable */
    public $show_form_cancel_button;
    /** @var string */
    public $admin_webpath;
    /** @var array */
    protected $list_natives_modules = [];
    /** @var array */
    protected $list_partners_modules = [];
    /** @var array<string, string|array> */
    public $modals = [];
    /** @var bool if logged employee has access to AdminImport */
    protected $can_import = \false;
    /** @var string */
    protected $tabSlug;
    /** @var int Auth cookie lifetime */
    public const AUTH_COOKIE_LIFETIME = 3600;
    /** @var array */
    public $_conf;
    /** @var bool */
    protected static $is_prestashop_up = \true;
    /** @var array */
    protected $translationsTab = [];
    /**
     * @var string
     */
    public $bo_css;
    /**
     * @var array
     */
    public $_error;
    /**
     * @var int
     */
    public $_lang;
    public function __construct($forceControllerName = '', $default_theme_name = 'default')
    {
    }
    /**
     * Gets the multistore header and assigns its html content to a smarty variable
     *
     * @see PrestaShopBundle\Controller\Admin\MultistoreController
     *
     * (the decision to display it or not is taken by the MultistoreController)
     */
    public function initMultistoreHeader(): void
    {
    }
    /**
     * Set breadcrumbs array for the controller page.
     *
     * @param int|null $tab_id
     * @param array|null $tabs
     */
    public function initBreadcrumbs($tab_id = \null, $tabs = \null)
    {
    }
    /**
     * Set default toolbar_title to admin breadcrumb.
     */
    public function initToolbarTitle()
    {
    }
    /**
     * @return string|void
     */
    public function addFiltersToBreadcrumbs()
    {
    }
    /**
     * @param string $action
     * @param bool $disable
     */
    public function access($action, $disable = \false)
    {
    }
    /**
     * Check rights to view the current tab.
     *
     * @param bool $disable
     *
     * @return bool
     */
    public function viewAccess($disable = \false)
    {
    }
    /**
     * Check for security token.
     *
     * @return bool
     */
    public function checkToken()
    {
    }
    /**
     * Set the filters used for the list display.
     */
    protected function getCookieFilterPrefix()
    {
    }
    public function processFilter()
    {
    }
    /**
     * @TODO uses redirectAdmin only if !$this->ajax
     *
     * @return ObjectModel|bool|void
     */
    public function postProcess()
    {
    }
    /**
     * Object Delete images.
     *
     * @return ObjectModel|false
     */
    public function processDeleteImage()
    {
    }
    /**
     * @param string $text_delimiter
     *
     * @throws PrestaShopException
     */
    public function processExport($text_delimiter = '"')
    {
    }
    /**
     * Object Delete.
     *
     * @return ObjectModel|false
     *
     * @throws PrestaShopException
     */
    public function processDelete()
    {
    }
    /**
     * Call the right method for creating or updating object.
     *
     * @return ObjectModel|false|void
     */
    public function processSave()
    {
    }
    /**
     * Object creation.
     *
     * @return ObjectModel|false
     *
     * @throws PrestaShopException
     */
    public function processAdd()
    {
    }
    /**
     * Object update.
     *
     * @return ObjectModel|false|void
     *
     * @throws PrestaShopException
     */
    public function processUpdate()
    {
    }
    /**
     * Change object required fields.
     *
     * @return ObjectModel
     */
    public function processUpdateFields()
    {
    }
    /**
     * Change object status (active, inactive).
     *
     * @return ObjectModel|false
     *
     * @throws PrestaShopException
     */
    public function processStatus()
    {
    }
    /**
     * Change object position.
     *
     * @return ObjectModel|false
     */
    public function processPosition()
    {
    }
    /**
     * Cancel all filters for this tab.
     *
     * @param string|null $list_id
     */
    public function processResetFilters($list_id = \null)
    {
    }
    /**
     * Update options and preferences.
     */
    protected function processUpdateOptions()
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    /**
     * assign default action in toolbar_btn smarty var, if they are not set.
     * uses override to specifically add, modify or remove items.
     */
    public function initToolbar()
    {
    }
    /**
     * Load class object using identifier in $_GET (if possible)
     * otherwise return an empty object, or die.
     *
     * @param bool $opt Return an empty object if load fail
     *
     * @return ObjectModel|bool
     */
    protected function loadObject($opt = \false)
    {
    }
    /**
     * Check if the token is valid, else display a warning page.
     *
     * @return bool
     */
    public function checkAccess()
    {
    }
    /**
     * @param string $key
     * @param string $filter
     *
     * @return array|false
     */
    protected function filterToField($key, $filter)
    {
    }
    public function displayAjax()
    {
    }
    protected function redirect()
    {
    }
    /**
     * @throws Exception
     * @throws SmartyException
     */
    public function display()
    {
    }
    /**
     * Add a warning message to display at the top of the page.
     *
     * @param string $msg
     */
    protected function displayWarning($msg)
    {
    }
    /**
     * Add a info message to display at the top of the page.
     *
     * @param string $msg
     */
    protected function displayInformation($msg)
    {
    }
    /**
     * Assign smarty variables for the header.
     */
    public function initHeader()
    {
    }
    /**
     * Declare an action to use for each row in the list.
     *
     * @param string $action
     */
    public function addRowAction($action)
    {
    }
    /**
     * Add an action to use for each row in the list.
     *
     * @param string $action
     * @param array $list
     */
    public function addRowActionSkipList($action, $list)
    {
    }
    /**
     * Assign smarty variables for all default views, list and form, then call other init functions.
     */
    public function initContent()
    {
    }
    public function initToolbarFlags()
    {
    }
    protected function getAdminModulesUrl()
    {
    }
    /**
     * Initialize the invalid doom page of death.
     */
    public function initCursedPage()
    {
    }
    /**
     * Assign smarty variables for the footer.
     */
    public function initFooter()
    {
    }
    /**
     * @throws Exception
     * @throws SmartyException
     */
    public function initModal()
    {
    }
    /**
     * @return string
     *
     * @throws Exception
     * @throws SmartyException
     */
    public function renderModal()
    {
    }
    /**
     * Function used to render the list to display for this controller.
     *
     * @return string|false
     *
     * @throws PrestaShopException
     */
    public function renderList()
    {
    }
    public function getTemplateListVars()
    {
    }
    /**
     * Override to render the view page.
     *
     * @return string
     */
    public function renderView()
    {
    }
    public function getTemplateViewVars()
    {
    }
    /**
     * Override to render the view page.
     *
     * @return string|false
     */
    public function renderDetails()
    {
    }
    /**
     * Function used to render the form for this controller.
     *
     * @return string
     *
     * @throws Exception
     * @throws SmartyException
     */
    public function renderForm()
    {
    }
    public function getTemplateFormVars()
    {
    }
    public function renderKpis()
    {
    }
    /**
     * Function used to render the options for this controller.
     *
     * @return string
     */
    public function renderOptions()
    {
    }
    /**
     * This function sets various display options for helper list.
     *
     * @param HelperList|HelperView|HelperOptions|HelperForm $helper
     */
    public function setHelperDisplay(\Helper $helper)
    {
    }
    /**
     * @param bool $isNewTheme
     */
    public function setMedia($isNewTheme = \false)
    {
    }
    /**
     * Translates a wording
     *
     * @deprecated Use $this->trans instead
     *
     * @param string $string Term or expression in english
     * @param string|null $class Name of the class
     * @param bool $addslashes If set to true, the return value will pass through addslashes(). Otherwise, stripslashes().
     * @param bool $htmlentities If set to true(default), the return value will pass through htmlentities($string, ENT_QUOTES, 'utf-8')
     *
     * @return string the translation if available, or the english default text
     */
    protected function l($string, $class = \null, $addslashes = \false, $htmlentities = \true)
    {
    }
    /**
     * Init context and dependencies, handles POST and GET.
     */
    public function init()
    {
    }
    /**
     * Sets the smarty variables and js defs used to show / hide some notifications.
     */
    public function initNotifications()
    {
    }
    /**
     * @throws PrestaShopException
     */
    public function initShopContext()
    {
    }
    /**
     * Retrieve GET and POST value and translate them to actions.
     */
    public function initProcess()
    {
    }
    /**
     * Get the current objects' list from the database.
     *
     * @param int $id_lang Language used for display
     * @param string|null $order_by ORDER BY clause
     * @param string|null $order_way Order way (ASC, DESC)
     * @param int $start Offset in LIMIT clause
     * @param int|null $limit Row count in LIMIT clause
     * @param int|bool $id_lang_shop
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function getList($id_lang, $order_by = \null, $order_way = \null, $start = 0, $limit = \null, $id_lang_shop = \false)
    {
    }
    /**
     * @return string
     */
    protected function getFromClause()
    {
    }
    /**
     * @param int $id_lang
     * @param int $id_lang_shop
     *
     * @return string
     */
    protected function getJoinClause($id_lang, $id_lang_shop)
    {
    }
    /**
     * @param int $idLang
     * @param int $idLangShop
     *
     * @return string
     */
    protected function getLanguageJoinClause($idLang, $idLangShop)
    {
    }
    /**
     * @return string
     */
    protected function getWhereClause()
    {
    }
    /**
     * @param string|null $orderBy
     * @param string|null $orderDirection
     *
     * @return string
     */
    protected function getOrderByClause($orderBy, $orderDirection)
    {
    }
    /**
     * @param string|null $orderBy
     *
     * @return false|string
     */
    protected function checkOrderBy($orderBy)
    {
    }
    /**
     * @param string|null $orderDirection
     *
     * @return string
     */
    protected function checkOrderDirection($orderDirection)
    {
    }
    /**
     * @return mixed
     */
    protected function getCookieOrderByPrefix()
    {
    }
    /**
     * @return string
     */
    protected function getHavingClause()
    {
    }
    /**
     * @param int $limit
     *
     * @return bool
     */
    protected function shouldLimitSqlResults($limit)
    {
    }
    /**
     * @param int $limit
     *
     * @return int
     */
    protected function checkSqlLimit($limit)
    {
    }
    /**
     * @param array|string|null $filter_modules_list
     * @param string|bool $tracking_source
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    public function getModulesList($filter_modules_list, $tracking_source = \false)
    {
    }
    /**
     * @return array
     */
    public function getLanguages()
    {
    }
    /**
     * Return the list of fields value.
     *
     * @param ObjectModel $obj Object
     *
     * @return array
     */
    public function getFieldsValue($obj)
    {
    }
    /**
     * Return field value if possible (both classical and multilingual fields).
     *
     * Case 1 : Return value if present in $_POST / $_GET
     * Case 2 : Return object value
     *
     * @param ObjectModel $obj Object
     * @param string $key Field name
     * @param int|null $id_lang Language id (optional)
     *
     * @return false|mixed
     */
    public function getFieldValue($obj, $key, $id_lang = \null)
    {
    }
    /**
     * Manage page display (form, list...).
     *
     * @param string|bool $class_name Allow to validate a different class than the current one
     *
     * @throws PrestaShopException
     */
    public function validateRules($class_name = \false)
    {
    }
    /**
     * Overload this method for custom checking.
     */
    protected function _childValidation()
    {
    }
    /**
     * Display object details.
     */
    public function viewDetails()
    {
    }
    /**
     * Called before deletion.
     *
     * @param ObjectModel $object Object
     *
     * @return bool
     */
    protected function beforeDelete($object)
    {
    }
    /**
     * Called before deletion.
     *
     * @param ObjectModel $object Object
     * @param int $old_id
     *
     * @return bool
     */
    protected function afterDelete($object, $old_id)
    {
    }
    /**
     * @param ObjectModel $object
     *
     * @return bool
     */
    protected function afterAdd($object)
    {
    }
    /**
     * @param ObjectModel $object
     *
     * @return bool
     */
    protected function afterUpdate($object)
    {
    }
    /**
     * Check rights to view the current tab.
     *
     * @return bool
     */
    protected function afterImageUpload()
    {
    }
    /**
     * Copy data values from $_POST to object.
     *
     * @param ObjectModel $object Object
     * @param string $table Object table
     */
    protected function copyFromPost(&$object, $table)
    {
    }
    /**
     * Returns an array with selected shops and type (group or boutique shop).
     *
     * @param string $table
     *
     * @return array
     */
    protected function getSelectedAssoShop($table)
    {
    }
    /**
     * Update the associations of shops.
     *
     * @param int $id_object
     *
     * @return bool|void
     *
     * @throws PrestaShopDatabaseException
     */
    protected function updateAssoShop($id_object)
    {
    }
    /**
     * @param mixed $value
     * @param array $field
     *
     * @return bool
     */
    protected function validateField($value, $field)
    {
    }
    /**
     * Can be overridden.
     */
    public function beforeUpdateOptions()
    {
    }
    /**
     * Overload this method for custom checking.
     *
     * @param int $id Object id used for deleting images
     *
     * @return bool
     */
    protected function postImage($id)
    {
    }
    /**
     * @param int $id
     * @param string $name
     * @param string $dir
     * @param string|bool $ext
     * @param int|null $width
     * @param int|null $height
     *
     * @return bool
     */
    protected function uploadImage($id, $name, $dir, $ext = \false, $width = \null, $height = \null)
    {
    }
    /**
     * Delete multiple items.
     *
     * @return bool true if success
     */
    protected function processBulkDelete()
    {
    }
    protected function ajaxProcessOpenHelp()
    {
    }
    /**
     * Enable multiple items.
     *
     * @return bool true if success
     */
    protected function processBulkEnableSelection()
    {
    }
    /**
     * Disable multiple items.
     *
     * @return bool true if success
     */
    protected function processBulkDisableSelection()
    {
    }
    /**
     * Toggle status of multiple items.
     *
     * @param bool $status
     *
     * @return bool true if success
     *
     * @throws PrestaShopException
     */
    protected function processBulkStatusSelection($status)
    {
    }
    /**
     * @return bool
     */
    protected function processBulkAffectZone()
    {
    }
    /**
     * Called before Add.
     *
     * @param ObjectModel $object Object
     *
     * @return bool
     */
    protected function beforeAdd($object)
    {
    }
    /**
     * Prepare the view to display the required fields form.
     *
     * @return string|void
     */
    public function displayRequiredFields()
    {
    }
    /**
     * Create a template from the override file, else from the base file.
     *
     * @param string $tpl_name filename
     *
     * @return Smarty_Internal_Template
     */
    public function createTemplate($tpl_name)
    {
    }
    /**
     * Shortcut to set up a json success payload.
     *
     * @param string $message Success message
     */
    public function jsonConfirmation($message)
    {
    }
    /**
     * Shortcut to set up a json error payload.
     *
     * @param string $message Error message
     */
    public function jsonError($message)
    {
    }
    /**
     * @deprecated Since 1.7.7 Use Tools::isFileFresh instead
     *
     * @param string $file
     * @param int $timeout
     *
     * @return bool
     */
    public function isFresh($file, $timeout = 604800)
    {
    }
    /**
     * @deprecated Since 1.7.7 Use Tools::refreshFile instead
     *
     * @param string $file_to_refresh
     * @param string $external_file
     *
     * @return bool
     */
    public function refresh($file_to_refresh, $external_file)
    {
    }
    /**
     * @param Module $module
     * @param string $output_type
     * @param string|null $back
     * @param string|bool $install_source_tracking
     */
    public function fillModuleData(&$module, $output_type = 'link', $back = \null, $install_source_tracking = \false)
    {
    }
    /**
     * Display modules list.
     *
     * @param Module|stdClass $module
     * @param string $output_type (link or select)
     * @param string|null $back
     * @param string|bool $install_source_tracking
     *
     * @return string|array
     */
    public function displayModuleOptions($module, $output_type = 'link', $back = \null, $install_source_tracking = \false)
    {
    }
    public function ajaxProcessGetModuleQuickView()
    {
    }
    /**
     * Add an entry to the meta title.
     *
     * @param string $entry new entry
     */
    public function addMetaTitle($entry)
    {
    }
    /**
     * Set action.
     *
     * @param string $action
     */
    public function setAction($action)
    {
    }
    /**
     * Set IdObject.
     *
     * @param int $id_object
     */
    public function setIdObject($id_object)
    {
    }
    /**
     * @return string
     */
    public function getTabSlug()
    {
    }
    /**
     * @return ContainerInterface
     */
    protected function buildContainer()
    {
    }
    /**
     * Return the type of authorization on module page.
     *
     * @return int
     */
    public function authorizationLevel()
    {
    }
    /**
     * Set if anonymous is allowed to run this controller
     *
     * @param bool $value
     */
    protected function setAllowAnonymous($value)
    {
    }
    /**
     * Return if an anonymous is allowed to run this controller
     *
     * @return bool
     */
    protected function isAnonymousAllowed()
    {
    }
    /**
     * Get the buttons provided by hooks and merge them into the already defined page toolbar buttons
     *
     * @throws TypeException
     */
    protected function mergeExtraToolbarButtons(): void
    {
    }
}
