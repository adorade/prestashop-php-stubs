<?php

class DispatcherCore
{
    /**
     * List of available front controllers types.
     */
    public const FC_FRONT = 1;
    public const FC_ADMIN = 2;
    public const FC_MODULE = 3;
    public const REWRITE_PATTERN = '[_a-zA-Z0-9\x{0600}-\x{06FF}\pL\pS-]*?';
    /**
     * @var Dispatcher|null
     */
    public static $instance = \null;
    /**
     * @var array List of default routes
     */
    public $default_routes = ['upload' => ['controller' => 'upload', 'rule' => 'upload/{file}', 'keywords' => ['file' => ['regexp' => '.+', 'param' => 'file']]], 'category_rule' => ['controller' => 'category', 'rule' => '{id}-{rewrite}', 'keywords' => ['id' => ['regexp' => '[0-9]+', 'param' => 'id_category'], 'rewrite' => ['regexp' => self::REWRITE_PATTERN], 'meta_title' => ['regexp' => '[_a-zA-Z0-9-\pL]*'], 'categories' => ['regexp' => '[/_a-zA-Z0-9-\pL]*']]], 'supplier_rule' => ['controller' => 'supplier', 'rule' => 'supplier/{id}-{rewrite}', 'keywords' => ['id' => ['regexp' => '[0-9]+', 'param' => 'id_supplier'], 'rewrite' => ['regexp' => self::REWRITE_PATTERN], 'meta_title' => ['regexp' => '[_a-zA-Z0-9-\pL]*']]], 'manufacturer_rule' => ['controller' => 'manufacturer', 'rule' => 'brand/{id}-{rewrite}', 'keywords' => ['id' => ['regexp' => '[0-9]+', 'param' => 'id_manufacturer'], 'rewrite' => ['regexp' => self::REWRITE_PATTERN], 'meta_title' => ['regexp' => '[_a-zA-Z0-9-\pL]*']]], 'cms_rule' => ['controller' => 'cms', 'rule' => 'content/{id}-{rewrite}', 'keywords' => ['id' => ['regexp' => '[0-9]+', 'param' => 'id_cms'], 'rewrite' => ['regexp' => self::REWRITE_PATTERN], 'meta_title' => ['regexp' => '[_a-zA-Z0-9-\pL]*']]], 'cms_category_rule' => ['controller' => 'cms', 'rule' => 'content/category/{id}-{rewrite}', 'keywords' => ['id' => ['regexp' => '[0-9]+', 'param' => 'id_cms_category'], 'rewrite' => ['regexp' => self::REWRITE_PATTERN], 'meta_title' => ['regexp' => '[_a-zA-Z0-9-\pL]*']]], 'module' => ['controller' => \null, 'rule' => 'module/{module}{/:controller}', 'keywords' => ['module' => ['regexp' => '[_a-zA-Z0-9_-]+', 'param' => 'module'], 'controller' => ['regexp' => '[_a-zA-Z0-9_-]+', 'param' => 'controller']], 'params' => ['fc' => 'module']], 'product_rule' => ['controller' => 'product', 'rule' => '{id}{-:id_product_attribute}-{rewrite}.html', 'keywords' => ['id' => ['regexp' => '[0-9]+', 'param' => 'id_product'], 'id_product_attribute' => ['regexp' => '[0-9]*+', 'param' => 'id_product_attribute'], 'rewrite' => ['regexp' => self::REWRITE_PATTERN, 'param' => 'rewrite'], 'ean13' => ['regexp' => '[0-9\pL]*'], 'category' => ['regexp' => '[_a-zA-Z0-9-\pL]*'], 'categories' => ['regexp' => '[/_a-zA-Z0-9-\pL]*'], 'reference' => ['regexp' => '[_a-zA-Z0-9-\pL]*'], 'meta_title' => ['regexp' => '[_a-zA-Z0-9-\pL]*'], 'manufacturer' => ['regexp' => '[_a-zA-Z0-9-\pL]*'], 'supplier' => ['regexp' => '[_a-zA-Z0-9-\pL]*'], 'price' => ['regexp' => '[0-9\.,]*'], 'tags' => ['regexp' => '[a-zA-Z0-9-\pL]*']]], 'attachment_rule' => ['controller' => 'attachment', 'rule' => 'attachment/{id}-{rewrite}', 'keywords' => ['id' => ['regexp' => '[0-9]+', 'param' => 'id_attachment'], 'rewrite' => ['regexp' => self::REWRITE_PATTERN]]]];
    /**
     * @var bool If true, use routes to build URL (mod rewrite must be activated)
     */
    protected $use_routes = \false;
    protected $multilang_activated = \false;
    /**
     * @var array List of loaded routes
     */
    protected $routes = [];
    /**
     * @var string Current controller name
     */
    protected $controller;
    /**
     * @var string Current request uri
     */
    protected $request_uri;
    /**
     * @var array Store empty route (a route with an empty rule)
     */
    protected $empty_route = ['routeID' => 'index', 'rule' => '', 'controller' => 'index'];
    /**
     * @var string Set default controller, which will be used if http parameter 'controller' is empty
     */
    protected $default_controller;
    protected $use_default_controller = \false;
    /**
     * @var string Controller to use if found controller doesn't exist
     */
    protected $controller_not_found = 'pagenotfound';
    /**
     * @var int Front controller to use
     */
    protected $front_controller = self::FC_FRONT;
    /**
     * Initializes a request into the dispatcher. This should be done
     * at the early stages of the application, before anything has a chance
     * to modify the request.
     */
    public static function setRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get current instance of dispatcher (singleton).
     *
     * @return Dispatcher
     *
     * @throws PrestaShopException
     */
    public static function getInstance(?\Symfony\Component\HttpFoundation\Request $request = \null)
    {
    }
    /**
     * Needs to be instantiated from getInstance() method.
     *
     * @throws PrestaShopException
     */
    protected function __construct()
    {
    }
    /**
     * Sets use_default_controller to true, sets and returns the default controller.
     *
     * @return string
     */
    public function useDefaultController()
    {
    }
    /**
     * Find the controller and instantiate it.
     */
    public function dispatch()
    {
    }
    /**
     * Sets request uri and if necessary $_GET['isolang'].
     */
    protected function setRequestUri()
    {
    }
    /**
     * Load default routes group by languages.
     *
     * @param int $id_shop
     */
    protected function loadRoutes($id_shop = \null)
    {
    }
    /**
     * Create the route array, by computing the final regex & keywords. The method takes a "human readable"
     * rule line {id}-{rewrite} and transforms it into a regular expression that will be used to match URLs.
     * Also, it transforms keywords into a more structured array with all the information about them (regexp,
     * param, prepend, append, required).
     *
     * @param string $rule Url rule
     * @param string $controller Controller to call if request uri match the rule
     * @param array $keywords keywords associated with the route
     * @param array $params optional params of the route
     *
     * @return array
     */
    public function computeRoute($rule, $controller, array $keywords = [], array $params = [])
    {
    }
    /**
     * Adds a new route to the list of routes. If it already exists, it will override the existing one.
     *
     * @param string $routeName Name of the route
     * @param string $rule Url rule
     * @param string $controller Controller to call if request uri match the rule
     * @param int $id_lang
     * @param array $keywords
     * @param array $params
     * @param int $id_shop
     */
    public function addRoute($routeName, $rule, $controller, $id_lang = \null, array $keywords = [], array $params = [], $id_shop = \null)
    {
    }
    /**
     * Returns a list of processed routes getting used.
     *
     * @return array List of routes
     */
    public function getRoutes()
    {
    }
    /**
     * Sets the controller
     *
     * @return $this
     */
    public function setController(string $controller): self
    {
    }
    /**
     * Sets the front controller
     *
     * @return $this
     */
    public function setFrontController(int $front_controller): self
    {
    }
    /**
     * Removes a route from a list of processed routes.
     *
     * @param string $routeName Name of the route
     * @param int $id_lang
     * @param int $id_shop
     */
    public function removeRoute($routeName, $id_lang = \null, $id_shop = \null)
    {
    }
    /**
     * Check if a route exists.
     *
     * @param string $routeName
     * @param int $id_lang
     * @param int $id_shop
     *
     * @return bool
     */
    public function hasRoute($routeName, $id_lang = \null, $id_shop = \null)
    {
    }
    /**
     * Check if a keyword is written in a route rule.
     *
     * @param string $routeName
     * @param int $id_lang
     * @param string $keyword
     * @param int $id_shop
     *
     * @return bool
     */
    public function hasKeyword($routeName, $id_lang, $keyword, $id_shop = \null)
    {
    }
    /**
     * Check if a route rule contains all required keywords and if all keywords exist.
     * Supports all native routes specified in $this->default_routes.
     *
     * @param string $routeName
     * @param string $rule Rule to verify
     * @param array $errors List of missing or unknown keywords
     *
     * @return bool
     */
    public function validateRoute($routeName, $rule, &$errors = [])
    {
    }
    /**
     * Create an url from.
     *
     * @param string $routeName Name the route
     * @param int $id_lang
     * @param array $params
     * @param bool $force_routes
     * @param string $anchor Optional anchor to add at the end of this url
     * @param int|null $id_shop
     *
     * @return string
     *
     * @throws PrestaShopException
     */
    public function createUrl($routeName, $id_lang = \null, array $params = [], $force_routes = \false, $anchor = '', $id_shop = \null)
    {
    }
    /**
     * Retrieve the controller from url or request uri if routes are activated.
     *
     * @param int $id_shop
     *
     * @return string
     */
    public function getController($id_shop = \null)
    {
    }
    /**
     * Get list of all available FO controllers.
     *
     * @param mixed $dirs
     *
     * @return array
     */
    public static function getControllers($dirs)
    {
    }
    /**
     * Get list of all available Module Front controllers.
     *
     * @param string $type
     * @param string|array|null $module
     *
     * @return array
     */
    public static function getModuleControllers($type = 'all', $module = \null)
    {
    }
    /**
     * Get list of available controllers from the specified dir.
     *
     * @param string $dir Directory to scan (recursively)
     *
     * @return array
     */
    public static function getControllersInDirectory($dir)
    {
    }
    /**
     * Get the default php_self value of a controller.
     *
     * @param string $controller The controller class name
     *
     * @return string|null
     */
    public static function getControllerPhpself(string $controller)
    {
    }
    /**
     * Get list of all php_self property values of each available controller in the specified dir.
     *
     * @param string $dir Directory to scan (recursively)
     * @param bool $base_name_otherwise Return the controller base name if no php_self is found
     *
     * @return array
     */
    public static function getControllersPhpselfList(string $dir, bool $base_name_otherwise = \true)
    {
    }
}
