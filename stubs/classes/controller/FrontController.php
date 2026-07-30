<?php

class FrontControllerCore extends \Controller
{
    /** @var array Controller warning notifications */
    public $warning = [];
    /** @var array Controller success notifications */
    public $success = [];
    /** @var array Controller info notifications */
    public $info = [];
    /** @var string Language ISO code */
    public $iso;
    /**
     * @deprecated Since 8.0 and will be removed in the next major.
     *
     * @var string ORDER BY field
     */
    public $orderBy;
    /**
     * @deprecated Since 8.0 and will be removed in the next major.
     *
     * @var string Order way string ('ASC', 'DESC')
     */
    public $orderWay;
    /**
     * @deprecated Since 8.0 and will be removed in the next major.
     *
     * @var int Current page number
     */
    public $p;
    /**
     * @deprecated Since 8.0 and will be removed in the next major.
     *
     * @var int Items (products) per page
     */
    public $n;
    /** @var bool If set to true, will redirected user to login page during init function. */
    public $auth = \false;
    /**
     * If set to true, user can be logged in as guest when checking if logged in.
     *
     * @deprecated Since 8.0 and will be removed in the next major.
     * @see $auth
     *
     * @var bool
     */
    public $guestAllowed = \false;
    /**
     * Route of PrestaShop page to redirect to after forced login.
     *
     * @see $auth
     *
     * @var bool|string
     */
    public $authRedirection = \false;
    /** @var bool SSL connection flag */
    public $ssl = \false;
    /** @var int If Country::GEOLOC_CATALOG_MODE, switches display to restricted country page during init. */
    protected $restrictedCountry = \Country::GEOLOC_ALLOWED;
    /** @var bool If true, forces display to maintenance page. */
    protected $maintenance = \false;
    /** @var string[] Adds excluded `$_GET` keys for redirection */
    protected $redirectionExtraExcludedKeys = [];
    /**
     * True if controller has already been initialized.
     * Prevents initializing controller more than once.
     *
     * @var bool
     */
    public static $initialized = \false;
    /**
     * @var array Holds current customer's groups
     */
    protected static $currentCustomerGroups;
    /**
     * @deprecated Since 8.0 and will be removed in the next major.
     *
     * @var int
     */
    public $nb_items_per_page;
    /**
     * @var ObjectPresenter
     */
    public $objectPresenter;
    /**
     * @var object CartPresenter
     */
    public $cart_presenter;
    /**
     * @var object StylesheetManager
     */
    protected $stylesheetManager;
    /**
     * @var object JavascriptManager
     */
    protected $javascriptManager;
    /**
     * @var object CccReducer
     */
    protected $cccReducer;
    /**
     * @var array Contains the result of getTemplateVarUrls method
     */
    protected $urls;
    /**
     * Set this parameter to false if you don't want cart's invoice address
     * to be set automatically (this behavior is kept for legacy and BC purpose)
     *
     * @var bool automaticallyAllocateInvoiceAddress
     */
    protected $automaticallyAllocateInvoiceAddress = \true;
    /**
     * Set this parameter to false if you don't want cart's delivery address
     * to be set automatically (this behavior is kept for legacy and BC purpose)
     *
     * @var bool automaticallyAllocateDeliveryAddress
     */
    protected $automaticallyAllocateDeliveryAddress = \true;
    /** @var string Page name */
    public $page_name;
    /**
     * Controller constructor.
     *
     * @global bool $useSSL SSL connection flag
     */
    public function __construct()
    {
    }
    /**
     * Check if the controller is available for the current user/visitor.
     *
     * @see Controller::checkAccess()
     *
     * @return bool
     */
    public function checkAccess()
    {
    }
    /**
     * Check if the current user/visitor has valid view permissions.
     *
     * @see Controller::viewAccess
     *
     * @return bool
     */
    public function viewAccess()
    {
    }
    /**
     * Initializes front controller: sets smarty variables,
     * class properties, redirects depending on context, etc.
     *
     * @global bool     $useSSL           SSL connection flag
     *
     * @throws PrestaShopException
     */
    public function init()
    {
    }
    /**
     * Method that is executed after init() and checkAccess().
     * Used to process user input.
     *
     * @see Controller::run()
     */
    public function postProcess()
    {
    }
    protected function assignGeneralPurposeVariables()
    {
    }
    /**
     * Builds the "prestashop" javascript object that will be sent to the front end.
     *
     * @param array $object Variables inserted in the template (see FrontController::assignGeneralPurposeVariables)
     *
     * @return array Variables to be inserted in the "prestashop" javascript object
     *
     * @throws \PrestaShop\PrestaShop\Core\Filter\FilterException
     * @throws PrestaShopException
     */
    protected function buildFrontEndObject($object)
    {
    }
    /**
     * Initializes common front page content: header, footer and side columns.
     */
    public function initContent()
    {
    }
    public function initFooter()
    {
    }
    /**
     * Initialize the invalid doom page of death.
     */
    public function initCursedPage()
    {
    }
    /**
     * Called before compiling common page sections (header, footer, columns).
     * Good place to modify smarty variables.
     *
     * @see FrontController::initContent()
     */
    public function process()
    {
    }
    /**
     * @return mixed
     */
    public function getStylesheets()
    {
    }
    /**
     * @return mixed
     */
    public function getJavascript()
    {
    }
    /**
     * Redirects to redirect_after link.
     *
     * @see $redirect_after
     */
    protected function redirect()
    {
    }
    public function redirectWithNotifications()
    {
    }
    /**
     * Renders page content.
     * Used for retrocompatibility with PS 1.4.
     */
    public function displayContent()
    {
    }
    /**
     * Compiles and outputs full page content.
     *
     * @return bool
     *
     * @throws Exception
     * @throws SmartyException
     */
    public function display()
    {
    }
    protected function smartyOutputContent($content)
    {
    }
    protected function prepareNotifications()
    {
    }
    /**
     * Displays maintenance page if shop is closed.
     */
    protected function displayMaintenancePage()
    {
    }
    /**
     * Displays 'country restricted' page if user's country is not allowed.
     */
    protected function displayRestrictedCountryPage()
    {
    }
    /**
     * Redirects to correct protocol if settings and request methods don't match.
     */
    protected function sslRedirection()
    {
    }
    /**
     * Redirects to canonical URL.
     *
     * @param string $canonical_url
     */
    protected function canonicalRedirection($canonical_url = '')
    {
    }
    /**
     * Geolocation management.
     *
     * @param Country $defaultCountry
     *
     * @return Country|false
     */
    protected function geolocationManagement($defaultCountry)
    {
    }
    /**
     * Sets controller CSS and JS files.
     *
     * @return bool
     */
    public function setMedia()
    {
    }
    /**
     * Initializes page header variables.
     */
    public function initHeader()
    {
    }
    /**
     * Sets and returns customer groups that the current customer(visitor) belongs to.
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getCurrentCustomerGroups()
    {
    }
    /**
     * Checks if user's location is whitelisted.
     *
     * @staticvar bool|null $allowed
     *
     * @return bool
     */
    protected static function isInWhitelistForGeolocation()
    {
    }
    /**
     * Checks if token is valid.
     *
     * @since 1.5.0.1
     *
     * @return bool
     */
    public function isTokenValid()
    {
    }
    public function registerStylesheet($id, $relativePath, $params = [])
    {
    }
    public function unregisterStylesheet($id)
    {
    }
    public function registerJavascript($id, $relativePath, $params = [])
    {
    }
    public function unregisterJavascript($id)
    {
    }
    /**
     * @deprecated 1.7 This function shouldn't be used, use $this->registerStylesheet() instead
     */
    public function addCSS($css_uri, $css_media_type = 'all', $offset = \null, $check_path = \true)
    {
    }
    /**
     * @deprecated 1.7 This function has no effect in PrestaShop 1.7 theme, use $this->unregisterStylesheet() instead
     */
    public function removeCSS($css_uri, $css_media_type = 'all', $check_path = \true)
    {
    }
    /**
     * @deprecated 1.7 This function has no effect in PrestaShop 1.7 theme, use $this->registerJavascript() instead
     */
    public function addJS($js_uri, $check_path = \true)
    {
    }
    /**
     * @deprecated 1.7 This function has no effect in PrestaShop 1.7 theme, use $this->unregisterJavascript() instead
     */
    public function removeJS($js_uri, $check_path = \true)
    {
    }
    /**
     * Adds jQuery UI component(s) to queued JS file list.
     *
     * @param string|array $component
     * @param string $theme
     * @param bool $check_dependencies
     */
    public function addJqueryUI($component, $theme = 'base', $check_dependencies = \true)
    {
    }
    /**
     * Add Library not included with classic theme.
     */
    public function requireAssets(array $libraries)
    {
    }
    /**
     * Adds jQuery plugin(s) to queued JS file list.
     *
     * @param string|array $name
     * @param string|null $folder
     * @param bool $css
     */
    public function addJqueryPlugin($name, $folder = \null, $css = \true)
    {
    }
    /**
     * Recovers cart information.
     *
     * @return int|false
     */
    protected function recoverCart()
    {
    }
    /**
     * Sets template file for page content output.
     *
     * @param string $template
     */
    public function setTemplate($template, $params = [], $locale = \null)
    {
    }
    /**
     * Removed in PrestaShop 1.7.
     *
     * @return bool
     */
    protected function useMobileTheme()
    {
    }
    /**
     * Returns theme directory (regular or mobile).
     *
     * @return string
     */
    protected function getThemeDir()
    {
    }
    /**
     * Returns the layout's full path corresponding to the current page by using the override system
     * Ex:
     * On the url: http://localhost/index.php?id_product=1&controller=product, this method will
     * check if the layout exists in the following files (in that order), and return the first found:
     * - /themes/default/override/layout-product-1.tpl
     * - /themes/default/override/layout-product.tpl
     * - /themes/default/layout.tpl.
     *
     * @since 1.5.0.13
     *
     * @return bool|string
     */
    public function getLayout()
    {
    }
    /**
     * Returns layout name for the current controller. Used to display layout name in <body> tag.
     *
     * @return string layout name
     */
    protected function getLayoutName()
    {
    }
    /**
     * Returns template path.
     *
     * @param string $template
     *
     * @return string
     */
    public function getTemplatePath($template)
    {
    }
    public function getTemplateFile($template, $params = [], $locale = \null)
    {
    }
    /**
     * Renders and adds color list HTML for each product in a list.
     *
     * @deprecated since 8.1 and will be removed in next major version.
     *
     * @param array $products
     */
    public function addColorsToProductList(&$products)
    {
    }
    /**
     * Returns cache ID for product color list.
     *
     * @deprecated since 8.1 and will be removed in next major version.
     *
     * @param int $id_product
     *
     * @return string
     */
    protected function getColorsListCacheId($id_product)
    {
    }
    public function getTemplateVarUrls()
    {
    }
    public function getTemplateVarConfiguration()
    {
    }
    protected function getDisplayTaxesLabel()
    {
    }
    public function getTemplateVarCurrency()
    {
    }
    public function getTemplateVarCustomer($customer = \null)
    {
    }
    /**
     * Get the shop logo with its dimensions
     *
     * @return array<string, string|int>
     */
    public function getShopLogo(): array
    {
    }
    public function getCoreJsPublicPath()
    {
    }
    public function getTemplateVarShop()
    {
    }
    public function getTemplateVarPage()
    {
    }
    public function getBreadcrumb()
    {
    }
    protected function getBreadcrumbLinks()
    {
    }
    protected function getCategoryPath($category)
    {
    }
    protected function addMyAccountToBreadcrumb()
    {
    }
    /**
     * Generate the canonical URL of the current page
     *
     * Mainly used for ProductController and CategoryController
     * but can be implemented by other classes inheriting from FrontController
     *
     * @return string|void
     */
    public function getCanonicalURL()
    {
    }
    /**
     * Generate a URL corresponding to the current page but
     * with the query string altered.
     *
     * If $extraParams is set to NULL, then all query params are stripped.
     *
     * Otherwise, params from $extraParams that have a null value are stripped,
     * and other params are added. Params not in $extraParams are unchanged.
     */
    protected function updateQueryString(array $extraParams = \null)
    {
    }
    protected function getCurrentURL()
    {
    }
    public function getPageName()
    {
    }
    protected function render($template, array $params = [])
    {
    }
    protected function getTranslator()
    {
    }
    protected function makeLoginForm()
    {
    }
    protected function makeCustomerFormatter()
    {
    }
    protected function makeCustomerForm()
    {
    }
    protected function makeAddressPersister()
    {
    }
    protected function makeAddressForm()
    {
    }
    /**
     * Get templateFinder.
     *
     * @return object
     */
    public function getTemplateFinder()
    {
    }
    public function getRestrictedCountry()
    {
    }
    public function getAssetUriFromLegacyDeprecatedMethod($legacy_uri)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function buildContainer()
    {
    }
    /**
     * @return array containing the URLs of the same page but for different languages
     */
    protected function getAlternativeLangsUrl()
    {
    }
    /**
     * Sanitize / Clean params of an URL
     *
     * @param string $url URL to clean
     *
     * @return string cleaned URL
     */
    protected function sanitizeUrl(string $url): string
    {
    }
    /**
     * Recursively sanitize output query
     *
     * @param array $query URL query
     *
     * @return array
     */
    protected function sanitizeQueryOutput(array $query): array
    {
    }
    /**
     * Validate data recursively to be sure it's URL compliant
     *
     * @return bool
     */
    protected function validateInputAsUrl($data): bool
    {
    }
}
