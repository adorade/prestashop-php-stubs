<?php

namespace PrestaShopBundle\Bridge\AdminController;

/**
 * This object holds the configuration of a Controller that is being migrated horizontally.
 * Its properties reflect the properties of a legacy PrestaShop controller.
 */
class ControllerConfiguration
{
    /**
     * Identifier of tab related to this configuration (tab is considered a single page and all of them are registered in database).
     *
     * @see AdminController::$id
     *
     * @var int
     */
    public $tabId;
    /**
     * ClassName of related object model. E.g. "Feature", "Category", "Product" etc.
     *
     * @see AdminController::$className
     *
     * @var string
     */
    public $objectModelClassName;
    /**
     * The name of related legacy AdminController without "controller" suffix (e.g. AdminFeatures).
     *
     * @see AdminController::$controller_name
     *
     * @var string
     */
    public $legacyControllerName;
    /**
     * Url referring to related legacy page (e.g. http://prestashop.local/admin-dev/index.php?controller=AdminFeatures&token=fooBar).
     *
     * @see AdminController::$currentIndex
     *
     * @var string
     */
    public $legacyCurrentIndex;
    /**
     * Name of field by which position is supposed to be identified (usually it is the id field e.g. id_feature).
     * Leave NULL to disable the positioning feature
     *
     * @see AdminController::$position_identifier
     *
     * @var string|null
     */
    public $positionIdentifierKey;
    /**
     * Name of the related database table
     *
     * @see AdminController::$table
     *
     * @var string
     */
    public $tableName;
    /**
     * Security token
     *
     * @see AdminController::$token
     *
     * @var string|null
     */
    public $token;
    /**
     * Meta title of single language if it is a string
     * or array of localized meta title values where index is the id of the language.
     *
     * Rendered in <head> -> <title>
     *
     * @see AdminController::$meta_title
     *
     * @var string|array<int, string>
     */
    public $metaTitle = [];
    /**
     * Array of parent tab names up to a current tab.
     *
     * @see AdminController::$breadcrumbs
     *
     * @var array<int, string>
     */
    public $breadcrumbs = [];
    /**
     * Defines if lite display should be used (lite display doesn't show header and footer).
     *
     * @see AdminController::$lite_display
     *
     * @var bool
     */
    public $liteDisplay = false;
    /**
     * Provides information about the type of displayed page (e.g. list, form, view, edit, options).
     *
     * @var string
     *
     * @see AdminController::$display
     */
    public $displayType = 'list';
    /**
     * Controls page header toolbar visibility.
     *
     * @see AdminController::$show_page_header_toolbar
     *
     * @var bool
     */
    public $showPageHeaderToolbar = true;
    /**
     * Title of the page shown in page header toolbar.
     *
     * @see AdminController::$page_header_toolbar_title
     *
     * @var string
     */
    public $pageHeaderToolbarTitle = '';
    /**
     * Action buttons rendered in page header (e.g. button to Add new feature).
     *
     * @see AdminController::$page_header_toolbar_btn
     * @see self::addHeaderToolbarAction() for array structure definition.
     *
     * @var array<string, array<string, mixed>>
     */
    public $pageHeaderToolbarActions = [];
    /**
     * Seems to work as a fallback for both - metaTitle and pageHeaderToolbarTitle.
     * Usually it contains breadcrumbs.
     *
     * Even though in legacy AdminController $toolbar_title type
     * is defined as array|string there are usages where string would throw error, so we type it as array
     *
     * @see self::$metaTitle
     * @see self::$pageHeaderToolbarTitle
     * @see AdminController::$toolbar_title
     *
     * @var string[]
     */
    public $toolbarTitle = [];
    /**
     * Defines if header should be rendered or not
     *
     * @see AdminController::$display_header
     *
     * @var bool
     */
    public $displayHeader = true;
    /**
     * Defines if <script type="text/javascript"> should be rendered in header or not
     *
     * @see AdminController::$display_header_javascript
     *
     * @var bool
     */
    public $displayHeaderJavascript = true;
    /**
     * Defines if footer should be rendered or not
     *
     * @see AdminController::$display_footer
     *
     * @var bool
     */
    public $displayFooter = true;
    /**
     * Defines bootstrap variable for template (different css classes are used depending on it)
     *
     * @see AdminController::$bootstrap
     *
     * @var bool
     */
    public $bootstrap = true;
    /**
     * Css files, where key of each file is the path to css file and value is the css media type
     * e.g. ['all' => '/admin-dev/themes/default/css/foo.css'].
     *
     * @see AdminController::$css_files
     *
     * @var array<string, string>
     */
    public $cssFiles = [];
    /**
     * List of paths to javascript files
     * e.g. ['/admin-dev/themes/new-theme/js/vendor/bootstrap.min.js'].
     *
     * @see AdminController::$js_files
     *
     * @var array<int, string>
     */
    public $jsFiles = [];
    /**
     * @see AdminController::tpl_folder
     *
     * @var string
     */
    public $templateFolder;
    /**
     * @see AdminController::$errors
     *
     * @var string[]
     */
    public $errors = [];
    /**
     * @see AdminController::$warnings
     *
     * @var string[]
     */
    public $warnings = [];
    /**
     * @see AdminController::$confirmations
     *
     * @var string[]
     */
    public $confirmations = [];
    /**
     * @see AdminController::$informations
     *
     * @var string[]
     */
    public $informations = [];
    /**
     * Defines if page content should be encoded in json format
     *
     * @see AdminController::$json
     *
     * @var bool
     */
    public $json = false;
    /**
     * Template name
     *
     * @see AdminController::$template
     *
     * @var string
     */
    public $template = 'content.tpl';
    /**
     * Template variables assigned to smarty
     *
     * @var array<string, mixed>
     */
    public $templateVars = [];
    /**
     * Template variables for modals
     *
     * @see AdminController::$modals
     *
     * @var array<int, array<string, mixed>>
     */
    public $modals = [];
    /**
     * Allows identifying multiShop context
     *
     * @see AdminController::$multishop_context
     *
     * @var int
     */
    public $multiShopContext = \Shop::CONTEXT_ALL | \Shop::CONTEXT_GROUP | \Shop::CONTEXT_SHOP;
    /**
     * Allows identifying multiShopGroup context
     *
     * @see AdminController::$multishop_context_group
     *
     * @var bool
     */
    public $multiShopContextGroup = true;
    /**
     * @param Employee $user
     * @param int $tabId
     * @param string $objectModelClassName
     * @param string $legacyControllerName
     * @param string $tableName
     * @param string $templateFolder
     */
    public function __construct(\PrestaShopBundle\Security\Admin\Employee $user, int $tabId, string $objectModelClassName, string $legacyControllerName, string $tableName, string $templateFolder)
    {
    }
    /**
     * Adds toolbar action to the page
     *
     * @param string $label
     * @param array{href?: string, desc?: string, icon?: string, class?: string} $config
     *
     * @return ControllerConfiguration
     */
    public function addHeaderToolbarAction(string $label, array $config): self
    {
    }
    /**
     * @return Employee
     */
    public function getUser(): \PrestaShopBundle\Security\Admin\Employee
    {
    }
}
