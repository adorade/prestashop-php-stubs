<?php

/**
 * @TODO Move undeclared variables and methods to this (base) class: $errors, $layout, checkLiveEditAccess, etc.
 *
 * @since 1.5.0
 */
abstract class ControllerCore
{
    public const SERVICE_LOCALE_REPOSITORY = 'prestashop.core.localization.locale.repository';
    public const SERVICE_MULTISTORE_FEATURE = 'prestashop.adapter.multistore_feature';
    /**
     * @var Context
     */
    protected $context;
    /**
     * List of CSS files.
     *
     * @var array
     */
    public $css_files = [];
    /**
     * List of JavaScript files.
     *
     * @var array
     */
    public $js_files = [];
    /**
     * List of PHP errors.
     *
     * @var array
     */
    public static $php_errors = [];
    /**
     * Set to true to display page header.
     *
     * @var bool
     */
    protected $display_header;
    /**
     * Set to true to display page header javascript.
     *
     * @var bool
     */
    protected $display_header_javascript;
    /**
     * Template filename for the page content.
     *
     * @var string
     */
    protected $template;
    /**
     * Set to true to display page footer.
     *
     * @var bool
     */
    protected $display_footer;
    /**
     * Set to true to only render page content (used to get iframe content).
     *
     * @var bool
     */
    protected $content_only = \false;
    /**
     * If AJAX parameter is detected in request, set this flag to true.
     *
     * @var bool
     */
    public $ajax = \false;
    /**
     * If set to true, page content and messages will be encoded to JSON before responding to AJAX request.
     *
     * @var bool
     */
    protected $json = \false;
    /**
     * JSON response status string.
     *
     * @var string
     */
    protected $status = '';
    /**
     * Redirect link. If not empty, the user will be redirected after initializing and processing input.
     *
     * @see Controller::run()
     *
     * @var string|null
     */
    protected $redirect_after = \null;
    /**
     * Controller type. Possible values: 'front', 'modulefront', 'admin', 'moduleadmin'.
     *
     * @var string
     */
    public $controller_type;
    /**
     * Controller name.
     *
     * @var string
     */
    public $php_self;
    /**
     * @var TranslatorComponent
     */
    protected $translator;
    /**
     * Dependency container.
     *
     * @var ContainerBuilder
     */
    protected $container;
    /**
     * Check if the controller is available for the current user/visitor.
     */
    abstract public function checkAccess();
    /**
     * Check if the current user/visitor has valid view permissions.
     */
    abstract public function viewAccess();
    /**
     * Errors displayed after post processing
     *
     * @var array<string|int, string|bool>
     */
    public $errors = [];
    /** @var string */
    public $layout;
    /**
     * Initialize the page.
     *
     * @throws Exception
     */
    public function init()
    {
    }
    /**
     * Do the page treatment: process input, process AJAX, etc.
     */
    abstract public function postProcess();
    /**
     * Displays page view.
     */
    abstract public function display();
    /**
     * Sets default media list for this controller.
     */
    abstract public function setMedia();
    /**
     * returns a new instance of this controller.
     *
     * @param string $class_name
     * @param bool $auth
     * @param bool $ssl
     *
     * @return Controller
     */
    public static function getController($class_name, $auth = \false, $ssl = \false)
    {
    }
    public function __construct()
    {
    }
    /**
     * Starts the controller process (this method should not be overridden!).
     */
    public function run()
    {
    }
    protected function trans($id, array $parameters = [], $domain = \null, $locale = \null)
    {
    }
    /**
     * Sets page header display.
     *
     * @param bool $display
     */
    public function displayHeader($display = \true)
    {
    }
    /**
     * Sets page header javascript display.
     *
     * @param bool $display
     */
    public function displayHeaderJavaScript($display = \true)
    {
    }
    /**
     * Sets page footer display.
     *
     * @param bool $display
     */
    public function displayFooter($display = \true)
    {
    }
    /**
     * Sets template file for page content output.
     *
     * @param string $template
     */
    public function setTemplate($template)
    {
    }
    /**
     * Assigns Smarty variables for the page header.
     */
    abstract public function initHeader();
    /**
     * Assigns Smarty variables for the page main content.
     */
    abstract public function initContent();
    /**
     * Assigns Smarty variables when access is forbidden.
     */
    abstract public function initCursedPage();
    /**
     * Assigns Smarty variables for the page footer.
     */
    abstract public function initFooter();
    /**
     * Redirects to $this->redirect_after after the process if there is no error.
     */
    abstract protected function redirect();
    /**
     * Set $this->redirect_after that will be used by redirect() after the process.
     */
    public function setRedirectAfter($url)
    {
    }
    /**
     * Adds a new stylesheet(s) to the page header.
     *
     * @param string|array $css_uri Path to CSS file, or list of css files like this : array(array(uri => media_type), ...)
     * @param string $css_media_type
     * @param int|null $offset
     * @param bool $check_path
     *
     * @return void
     */
    public function addCSS($css_uri, $css_media_type = 'all', $offset = \null, $check_path = \true)
    {
    }
    /**
     * Removes CSS stylesheet(s) from the queued stylesheet list.
     *
     * @param string|array $css_uri Path to CSS file or an array like: array(array(uri => media_type), ...)
     * @param string $css_media_type
     * @param bool $check_path
     */
    public function removeCSS($css_uri, $css_media_type = 'all', $check_path = \true)
    {
    }
    /**
     * Adds a new JavaScript file(s) to the page header.
     *
     * @param string|array $js_uri Path to JS file or an array like: array(uri, ...)
     * @param bool $check_path
     */
    public function addJS($js_uri, $check_path = \true)
    {
    }
    /**
     * Removes JS file(s) from the queued JS file list.
     *
     * @param string|array $js_uri Path to JS file or an array like: array(uri, ...)
     * @param bool $check_path
     */
    public function removeJS($js_uri, $check_path = \true)
    {
    }
    /**
     * Adds jQuery library file to queued JS file list.
     *
     * @param string|null $version jQuery library version
     * @param string|null $folder jQuery file folder
     * @param bool $minifier if set tot true, a minified version will be included
     *
     * @deprecated 1.7.7 jQuery is always included, this method should no longer be used
     */
    public function addJquery($version = \null, $folder = \null, $minifier = \true)
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
     * Checks if the controller has been called from XmlHttpRequest (AJAX).
     *
     * @since 1.5
     *
     * @return bool
     */
    public function isXmlHttpRequest()
    {
    }
    public function getLayout()
    {
    }
    /**
     * Renders controller templates and generates page content.
     *
     * @param array|string $templates Template file(s) to be rendered
     *
     * @throws Exception
     * @throws SmartyException
     */
    protected function smartyOutputContent($templates)
    {
    }
    /**
     * Checks if a template is cached.
     *
     * @param string $template
     * @param string|null $cache_id Cache item ID
     * @param string|null $compile_id
     *
     * @return bool
     */
    protected function isCached($template, $cache_id = \null, $compile_id = \null)
    {
    }
    /**
     * Custom error handler.
     *
     * @param int $errno
     * @param string $errstr
     * @param string $errfile
     * @param int $errline
     *
     * @return bool
     */
    public static function myErrorHandler($errno, $errstr, $errfile, $errline)
    {
    }
    /**
     * @deprecated deprecated since 1.7.5.0, use ajaxRender instead
     * Dies and echoes output value
     *
     * @param string|null $value
     * @param string|null $controller
     * @param string|null $method
     *
     * @throws PrestaShopException
     */
    protected function ajaxDie($value = \null, $controller = \null, $method = \null)
    {
    }
    /**
     * @param string|null $value
     * @param string|null $controller
     * @param string|null $method
     *
     * @throws PrestaShopException
     */
    protected function ajaxRender($value = \null, $controller = \null, $method = \null)
    {
    }
    /**
     * Construct the dependency container.
     *
     * @return ContainerBuilder
     */
    abstract protected function buildContainer();
    /**
     * Gets a service from the service container.
     *
     * @param string $serviceId Service identifier
     *
     * @return object The associated service
     *
     * @throws Exception
     */
    public function get($serviceId)
    {
    }
    /**
     * Gets a parameter.
     *
     * @param string $parameterId The parameter name
     *
     * @return mixed The parameter value
     *
     * @throws InvalidArgumentException if the parameter is not defined
     */
    public function getParameter($parameterId)
    {
    }
    /**
     * Gets the dependency container.
     *
     * @return ContainerBuilder|null
     */
    public function getContainer()
    {
    }
    /**
     * Check if multistore feature is enabled.
     *
     * @return bool
     */
    public function isMultistoreEnabled(): bool
    {
    }
}
