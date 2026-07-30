<?php

abstract class ModuleCore implements \PrestaShop\PrestaShop\Core\Module\Legacy\ModuleInterface
{
    /** @var int|null Module ID */
    public $id = \null;
    /** @var string Version */
    public $version;
    public $database_version;
    /**
     * @since 1.5.0.1
     *
     * @var string Registered Version in database
     */
    public $registered_version;
    /** @var array filled with known compliant PS versions */
    public $ps_versions_compliancy = [];
    /** @var array filled with modules needed for install */
    public $dependencies = [];
    /** @var string|int|null Unique name */
    public $name;
    /** @var string Human name */
    public $displayName;
    /** @var string A little description of the module */
    public $description;
    /**
     * @var string Text to display when ask for confirmation on uninstall action
     */
    public $confirmUninstall = '';
    /** @var string author of the module */
    public $author;
    /** @var string URI author of the module */
    public $author_uri = '';
    /** @var string Module key provided by addons.prestashop.com */
    public $module_key = '';
    /**
     * @var bool Set to true to enable bootstrap theme on configuration page
     */
    public $bootstrap = \false;
    public $description_full;
    public $additional_description;
    public $compatibility;
    public $nb_rates;
    public $avg_rate;
    public $badges;
    /** @var string */
    public $message = '';
    /** @var string */
    public $logo = '';
    /** @var array */
    public $options;
    /** @var array|string */
    public $optionsHtml;
    /** @var int need_instance */
    public $need_instance = 1;
    /** @var string Admin tab corresponding to the module */
    public $tab = \null;
    /** @var bool Status */
    public $active = \false;
    /** @var string Fill it if the module is installed but not yet set up */
    public $warning;
    public $enable_device = 7;
    /** @var array to store the limited country */
    public $limited_countries = [];
    /** @var array names of the controllers */
    public $controllers = [];
    /** @var bool */
    public $installed;
    /** @var bool */
    public $show_quick_view = \false;
    /** @var array used by AdminTab to determine which lang file to use (admin.php or module lang file) */
    public static $classInModule = [];
    /** @var array current language translations */
    protected $_lang = [];
    /** @var string Module web path (eg. '/shop/modules/modulename/') */
    protected $_path = \null;
    /**
     * @since 1.5.0.1
     *
     * @var string Module local path (eg. '/home/prestashop/modules/modulename/')
     */
    protected $local_path = \null;
    /** @var array Array filled with module errors */
    protected $_errors = [];
    /** @var array Array  array filled with module success */
    protected $_confirmations = [];
    /** @var string Main table used for modules installed */
    protected $table = 'module';
    /** @var string Identifier of the main table */
    protected $identifier = 'id_module';
    /** @var array|null Array cache filled with modules informations */
    protected static $modules_cache;
    /** @var array Array cache filled with modules instances */
    protected static $_INSTANCE = [];
    /** @var bool Config xml generation mode */
    protected static $_generate_config_xml_mode = \false;
    /** @var array Array filled with cache translations */
    protected static $l_cache = [];
    /** @var array Array filled with cache permissions (modules / employee profiles) */
    protected static $cache_permissions = [];
    /** @var array Array filled with cache permissions (modules / employee profiles) */
    protected static $cache_lgc_access = [];
    /** @var Context */
    protected $context;
    /** @var Smarty_Data|Smarty_Internal_TemplateBase */
    protected $smarty;
    /** @var Smarty_Internal_Template|null */
    protected $current_subtemplate = \null;
    protected static $update_translations_after_install = \true;
    protected static $_batch_mode = \false;
    protected static $_defered_clearCache = [];
    protected static $_defered_func_call = [];
    /**
     * @var array array of arrays representing tabs added by this module
     *
     * @see PrestaShop\PrestaShop\Adapter\Module\Tab\RegisterTabs($module)
     */
    protected $tabs = [];
    /** @var bool Define if we will log modules performances for this session */
    public static $_log_modules_perfs = \null;
    /** @var bool Random session for modules perfs logs */
    public static $_log_modules_perfs_session = \null;
    /** @var array|null used to cache module ids */
    protected static $cachedModuleNames = \null;
    /** @var int Defines the multistore compatibility level of the module */
    public $multistoreCompatibility = self::MULTISTORE_COMPATIBILITY_UNKNOWN;
    public const CACHE_FILE_MODULES_LIST = '/config/xml/modules_list.xml';
    public const CACHE_FILE_TAB_MODULES_LIST = '/config/xml/tab_modules_list.xml';
    public const CACHE_FILE_ALL_COUNTRY_MODULES_LIST = '/config/xml/modules_native_addons.xml';
    public const MULTISTORE_COMPATIBILITY_NO = -20;
    public const MULTISTORE_COMPATIBILITY_NOT_CONCERNED = -10;
    public const MULTISTORE_COMPATIBILITY_UNKNOWN = 0;
    public const MULTISTORE_COMPATIBILITY_PARTIAL = 10;
    public const MULTISTORE_COMPATIBILITY_YES = 20;
    public static $hosted_modules_blacklist = ['autoupgrade'];
    public static function setContextInstanceForTesting(\Context $context)
    {
    }
    /**
     * Set the flag to indicate we are doing an import.
     *
     * @param bool $value
     */
    public static function setBatchMode($value)
    {
    }
    /**
     * @return bool
     */
    public static function getBatchMode()
    {
    }
    public static function processDeferedFuncCall()
    {
    }
    /**
     * Clear the caches stored in $_defered_clearCache.
     */
    public static function processDeferedClearCache()
    {
    }
    /**
     * Constructor.
     *
     * @param string|null $name (Deprecated parameter)
     * @param Context|null $context
     */
    public function __construct($name = \null, \Context $context = \null)
    {
    }
    /**
     * Insert module into datable.
     */
    public function install()
    {
    }
    /**
     * Important: Do not type this method for compatibility reason.
     * If your module aims to be compatible for older PHP versions, it will
     * not be possible if we add strict typing as PHP 5.6 (for example) cannot strict type with bool.
     *
     * @return bool
     */
    public function postInstall()
    {
    }
    public function checkCompliancy()
    {
    }
    public static function updateTranslationsAfterInstall($update = \true)
    {
    }
    public function updateModuleTranslations()
    {
    }
    /**
     * Set errors, warning or success message of a module upgrade.
     *
     * @param array $upgrade_detail
     */
    protected function setUpgradeMessage($upgrade_detail)
    {
    }
    /**
     * Init the upgrade module.
     *
     * @param Module|stdClass $module
     *
     * @return bool
     */
    public static function initUpgradeModule($module)
    {
    }
    /**
     * Run the upgrade for a given module name and version.
     *
     * @return array
     */
    public function runUpgradeModule()
    {
    }
    /**
     * Upgrade the registered version to a new one.
     *
     * @param string $name
     * @param string $version
     *
     * @return bool
     */
    public static function upgradeModuleVersion($name, $version)
    {
    }
    /**
     * Check if a module need to be upgraded.
     * This method modify the module_cache adding an upgrade list file.
     *
     * @param Module $module
     *
     * @return bool|null Boolean if Module::$version != Module::$database_version, null instead
     */
    public static function needUpgrade($module)
    {
    }
    /**
     * Load the available list of upgrade of a specified module
     * with an associated version.
     *
     * @param string $module_name
     * @param string $module_version
     * @param string $registered_version
     *
     * @return bool to know directly if any files have been found
     */
    protected static function loadUpgradeVersionList($module_name, $module_version, $registered_version)
    {
    }
    /**
     * Return the status of the upgraded module.
     *
     * @param string $module_name
     *
     * @return bool
     */
    public static function getUpgradeStatus($module_name)
    {
    }
    /**
     * Uninstalls the module from database.
     *
     * @return bool result
     */
    public function uninstall()
    {
    }
    /**
     * This function enable module $name. If an $name is an array,
     * this will enable all of them.
     *
     * @param array|string $name
     *
     * @return bool
     *
     * @since 1.4.1
     * @deprecated since 1.7
     * @see  PrestaShop\PrestaShop\Core\Addon\Module\ModuleManager->enable($name)
     */
    public static function enableByName($name)
    {
    }
    /**
     * Activate current module.
     *
     * @param bool $force_all If true, enable module for all shop
     *
     * @return bool
     */
    public function enable($force_all = \false)
    {
    }
    public function enableDevice($device)
    {
    }
    public function disableDevice($device)
    {
    }
    /**
     * This function disable all module $name. If an $name is an array,
     * this will disable all of them.
     *
     * @param array|string $name
     *
     * @return bool
     *
     * @since 1.7
     */
    public static function disableAllByName($name)
    {
    }
    /**
     * This function disable module $name. If an $name is an array,
     * this will disable all of them.
     *
     * @param array|string $name
     *
     * @return bool
     *
     * @since 1.4.1
     * @deprecated since 1.7
     * @see  PrestaShop\PrestaShop\Core\Addon\Module\ModuleManager->disable($name)
     */
    public static function disableByName($name)
    {
    }
    /**
     * Desactivate current module.
     *
     * @param bool $force_all If true, disable module for all shop
     *
     * @return bool
     */
    public function disable($force_all = \false)
    {
    }
    public function hasShopAssociations(): bool
    {
    }
    /**
     * Display flags in forms for translations.
     *
     * @deprecated since 1.6.0.10
     *
     * @param array $languages All languages available
     * @param int $default_language Default language id
     * @param string $ids Multilingual div ids in form
     * @param string $id Current div id]
     * @param bool $return define the return way : false for a display, true for a return
     * @param bool $use_vars_instead_of_ids use an js vars instead of ids seperate by "¤"
     *
     * @return bool|string|void
     */
    public function displayFlags($languages, $default_language, $ids, $id, $return = \false, $use_vars_instead_of_ids = \false)
    {
    }
    /**
     * Connect module to a hook.
     *
     * @param string|array $hook_name Hook name
     * @param array|null $shop_list List of shop linked to the hook (if null, link hook to all shops)
     *
     * @return bool result
     */
    public function registerHook($hook_name, $shop_list = \null)
    {
    }
    /**
     * Unregister module from hook.
     *
     * @param int|string $hook_id Hook id (can be a hook name since 1.5.0)
     * @param array|null $shop_list List of shop
     *
     * @return bool result
     */
    public function unregisterHook($hook_id, $shop_list = \null)
    {
    }
    /**
     * Unregister exceptions linked to module.
     *
     * @param int $hook_id Hook id
     * @param array|null $shop_list List of shop
     *
     * @return bool result
     */
    public function unregisterExceptions($hook_id, $shop_list = \null)
    {
    }
    /**
     * Add exceptions for module->Hook.
     *
     * @param int $id_hook Hook id
     * @param array $excepts List of file name
     * @param array $shop_list List of shop
     *
     * @return bool result
     */
    public function registerExceptions($id_hook, $excepts, $shop_list = \null)
    {
    }
    /**
     * Edit exceptions for module->Hook.
     *
     * @param int $id_hook Hook id
     * @param array $excepts List of shopID and file name
     *
     * @return bool result
     */
    public function editExceptions($id_hook, $excepts)
    {
    }
    /**
     * This function is used to determine the module name
     * of an AdminTab which belongs to a module, in order to keep translation
     * related to a module in its directory.
     *
     * Note: this won't work if the module's path contains symbolic links
     *
     * @param string $current_class Name of Module class
     *
     * @return bool|string if the class belongs to a module, will return the module name. Otherwise, return false.
     */
    public static function getModuleNameFromClass($current_class)
    {
    }
    /**
     * Return an instance of the specified module.
     *
     * @param string $module_name Module name
     *
     * @return Module|false
     */
    public static function getInstanceByName($module_name)
    {
    }
    protected static function coreLoadModule($module_name)
    {
    }
    /**
     * Return an instance of the specified module.
     *
     * @param int $id_module Module ID
     *
     * @return Module|false
     */
    public static function getInstanceById($id_module)
    {
    }
    /**
     * Clear static cache.
     */
    public static function clearStaticCache()
    {
    }
    public static function configXmlStringFormat($string)
    {
    }
    public static function getModuleName($module)
    {
    }
    protected static function useTooMuchMemory()
    {
    }
    /**
     * Return available modules.
     *
     * @param bool $use_config in order to use config.xml file in module dir
     *
     * @return array<\stdClass> Modules
     */
    public static function getModulesOnDisk($use_config = \false, $id_employee = \false)
    {
    }
    /**
     * @param \StdClass $modaddons Addons Module object, provided by XML stream
     *
     * @return string|null
     */
    public static function copyModAddonsImg($modaddons)
    {
    }
    /**
     * Return modules directory list.
     *
     * @return array Modules Directory List
     */
    public static function getModulesDirOnDisk()
    {
    }
    /**
     * Return non native module.
     *
     * @return array|false Modules list or false if cannot read xml
     */
    public static function getNonNativeModuleList()
    {
    }
    /**
     * @return array<string>
     */
    public static function getNativeModuleList()
    {
    }
    /**
     * Return installed modules.
     *
     * @param int $position Take only positionnables modules
     *
     * @return array Modules
     */
    public static function getModulesInstalled($position = 0)
    {
    }
    /**
     * Returns the list of the payment module associated to the current customer.
     *
     * @see PaymentModule::getInstalledPaymentModules() if you don't care about the context
     *
     * @return array module informations
     */
    public static function getPaymentModules()
    {
    }
    /**
     * Get translation for a given module text.
     *
     * Note: $specific parameter is mandatory for library files.
     * Otherwise, translation key will not match for Module library
     * when module is loaded with eval() Module::getModulesOnDisk()
     *
     * @param string $string String to translate
     * @param bool|string $specific filename to use in translation key
     * @param string|null $locale Locale to translate to
     *
     * @return string Translation
     */
    public function l($string, $specific = \false, $locale = \null)
    {
    }
    /**
     * Reposition module
     *
     * @param int $id_hook Hook ID
     * @param bool $way Up (0) or Down (1)
     * @param int|null $position
     *
     * @return bool
     */
    public function updatePosition($id_hook, $way, $position = \null)
    {
    }
    /**
     * Reorder modules position
     *
     * @param int $id_hook Hook ID
     * @param array|null $shop_list List of shop
     *
     * @return bool
     */
    public function cleanPositions($id_hook, $shop_list = \null)
    {
    }
    /**
     * Helper displaying error message(s).
     *
     * @param string|array $error
     *
     * @return string
     */
    public function displayError($error)
    {
    }
    /**
     * Helper displaying warning message(s).
     *
     * @param string|array $warning
     *
     * @return string
     */
    public function displayWarning($warning)
    {
    }
    /**
     * Helper displaying confirmation message.
     *
     * @param string $string
     *
     * @return string
     */
    public function displayConfirmation($string)
    {
    }
    /**
     * Helper displaying information message(s).
     *
     * @param string|array $information
     *
     * @return string
     */
    public function displayInformation($information)
    {
    }
    /**
     * Return exceptions for module in hook
     *
     * @param int $id_module Module ID
     * @param int $id_hook Hook ID
     * @param bool $dispatch
     *
     * @return array Exceptions
     */
    public static function getExceptionsStatic($id_module, $id_hook, $dispatch = \false)
    {
    }
    /**
     * Return exceptions for module in hook
     *
     * @param int $id_hook Hook ID
     * @param bool $dispatch
     *
     * @return array Exceptions
     */
    public function getExceptions($id_hook, $dispatch = \false)
    {
    }
    /**
     * @param string $module_name
     *
     * @return bool
     *
     * @deprecated since 1.7
     * @see  PrestaShop\PrestaShop\Core\Addon\Module\ModuleManager->isInstalled($name)
     */
    public static function isInstalled($module_name)
    {
    }
    public function isEnabledForShopContext()
    {
    }
    public static function isEnabled($module_name)
    {
    }
    public static function isEnabledForMobileDevices($module_name)
    {
    }
    /**
     * Check if module is registered on hook
     *
     * @param string $hook Hook name
     *
     * @return bool
     */
    public function isRegisteredInHook($hook)
    {
    }
    /**
     * Template management (display, overload, cache).
     */
    protected static function _isTemplateOverloadedStatic($module_name, $template)
    {
    }
    protected function _isTemplateOverloaded($template)
    {
    }
    protected function getCacheId($name = \null)
    {
    }
    public function display($file, $template, $cache_id = \null, $compile_id = \null)
    {
    }
    /**
     * Use this method to return the result of a smarty template when assign data only locally with $this->smarty->assign().
     *
     * @param string $templatePath relative path the template file, from the module root dir
     * @param string|null $cache_id
     * @param string|null $compile_id
     *
     * @return string
     */
    public function fetch($templatePath, $cache_id = \null, $compile_id = \null)
    {
    }
    /**
     * @param string $template
     * @param string|null $cache_id
     * @param string|null $compile_id
     *
     * @return Smarty_Internal_Template
     */
    protected function getCurrentSubTemplate($template, $cache_id = \null, $compile_id = \null)
    {
    }
    protected function resetCurrentSubTemplate($template, $cache_id, $compile_id)
    {
    }
    /**
     * Get realpath of a template of current module (check if template is overridden too).
     *
     * @since 1.5.0
     *
     * @param string $template
     *
     * @return string|null
     */
    public function getTemplatePath($template)
    {
    }
    public function isCached($template, $cache_id = \null, $compile_id = \null)
    {
    }
    /**
     * Clear template cache.
     *
     * @param string $template Template name
     * @param string|null $cache_id
     * @param string|null $compile_id
     *
     * @return int Number of template cleared
     */
    protected function _clearCache($template, $cache_id = \null, $compile_id = \null)
    {
    }
    /**
     * Clear defered template cache.
     *
     * @param string $template_path Template path
     * @param string|null $cache_id
     * @param string|null $compile_id
     *
     * @return int Number of template cleared
     */
    public static function _deferedClearCache($template_path, $cache_id, $compile_id)
    {
    }
    protected function _generateConfigXml()
    {
    }
    /**
     * Check if the module is transplantable on the hook in parameter.
     *
     * @param string $hook_name
     *
     * @return bool if module can be transplanted on hook
     */
    public function isHookableOn($hook_name)
    {
    }
    /**
     * @param int $idProfile
     *
     * @return array
     */
    public static function getModulesAccessesByIdProfile($idProfile)
    {
    }
    /**
     * Check employee permission for module.
     *
     * @param string $variable (action)
     * @param Employee $employee
     *
     * @return bool if module can be transplanted on hook
     */
    public function getPermission($variable, $employee = \null)
    {
    }
    /**
     * Check employee permission for module (static method).
     *
     * @param int $id_module
     * @param string $variable (action)
     * @param Employee $employee
     *
     * @return bool if module can be transplanted on hook
     */
    public static function getPermissionStatic($id_module, $variable, $employee = \null)
    {
    }
    /**
     * Get authorized modules for a client group.
     *
     * @param int $group_id
     * @param array $shops
     *
     * @return array|null
     */
    public static function getAuthorizedModules($group_id, $shops = [1])
    {
    }
    /**
     * Get ID module by name.
     *
     * @param string $name
     *
     * @return int Module ID
     */
    public static function getModuleIdByName($name)
    {
    }
    /**
     * Get module errors.
     *
     * @since 1.5.0
     *
     * @return array errors
     */
    public function getErrors()
    {
    }
    /**
     * Get module messages confirmation.
     *
     * @since 1.5.0
     *
     * @return array conf
     */
    public function getConfirmations()
    {
    }
    /**
     * Get local path for module.
     *
     * @since 1.5.0
     *
     * @return string
     */
    public function getLocalPath()
    {
    }
    /**
     * Get uri path for module.
     *
     * @since 1.5.0
     *
     * @return string
     */
    public function getPathUri()
    {
    }
    /**
     * Return module position for a given hook
     *
     * @param int $id_hook Hook ID
     *
     * @return int position or 0 if hook not found
     */
    public function getPosition($id_hook)
    {
    }
    /**
     * Getter for $tabs attribute.
     *
     * @return array
     */
    public function getTabs()
    {
    }
    /**
     * add a warning message to display at the top of the admin page.
     *
     * @param string $msg
     *
     * @return false|void
     */
    public function adminDisplayWarning($msg)
    {
    }
    /**
     * add a info message to display at the top of the admin page.
     *
     * @param string $msg
     *
     * @return false|void
     */
    protected function adminDisplayInformation($msg)
    {
    }
    /**
     * Install module's controllers using public property $controllers.
     *
     * @return bool
     */
    protected function installControllers()
    {
    }
    /**
     * Install overrides files for the module.
     *
     * @return bool
     */
    public function installOverrides()
    {
    }
    /**
     * Uninstall overrides files for the module.
     *
     * @return bool
     */
    public function uninstallOverrides()
    {
    }
    /**
     * Add all methods in a module override to the override class.
     *
     * @param string $classname
     *
     * @return bool
     */
    public function addOverride($classname)
    {
    }
    /**
     * Remove all methods in a module override from the override class.
     *
     * @param string $classname
     *
     * @return bool
     */
    public function removeOverride($classname)
    {
    }
    /**
     * Return the hooks list where this module can be hooked.
     *
     * @return array hooks list
     */
    public function getPossibleHooksList()
    {
    }
    /**
     * Retrieve an array of the override in the module.
     *
     * @return array|null
     */
    public function getOverrides()
    {
    }
    public function getTranslator()
    {
    }
    protected function trans($id, array $parameters = [], $domain = \null, $locale = \null)
    {
    }
    /**
     * Check if the module uses the new translation system.
     *
     * @return bool
     */
    public function isUsingNewTranslationSystem()
    {
    }
    /**
     * Check if the module is executed in Admin Legacy context.
     *
     * To be removed - because useless - when the migration will be done.
     *
     * @return bool
     */
    public function isAdminLegacyContext()
    {
    }
    /**
     * Check if the module is executed in Symfony context.
     *
     * To be removed - because useless - when the migration will be done.
     *
     * @return bool
     */
    public function isSymfonyContext()
    {
    }
    /**
     * Access a service from the container (found from the controller or the context
     * depending on cases). It uses ContainerFinder to find the appropriate container.
     *
     * @param string $serviceName
     *
     * @return object|false If a container is not available it returns false
     *
     * @throws ServiceCircularReferenceException When a circular reference is detected
     * @throws ServiceNotFoundException When the service is not defined
     * @throws \Exception
     */
    public function get($serviceName)
    {
    }
    /**
     * Returns the container depending on the environment:
     *  - Legacy: light container with few services specifically defined for legacy front/admin controllers
     *  - Symfony: symfony container with all the migrated services (CQRS, ...)
     *
     * If you need to detect which kind of container you are using you can check if it is an instance of LegacyContainerInterface,
     * which means it's a legacy/light container.
     *
     * @return ContainerInterface
     *
     * @throws ContainerNotFoundException
     */
    public function getContainer(): \Symfony\Component\DependencyInjection\ContainerInterface
    {
    }
    /**
     * Save dashboard configuration
     *
     * @param array $config
     *
     * @return array Array of errors
     */
    public function validateDashConfig(array $config)
    {
    }
    /**
     * Save dashboard configuration
     *
     * @param array $config
     *
     * @return bool Determines if the save returns an error
     */
    public function saveDashConfig(array $config)
    {
    }
    /**
     * Returns shop theme name from context as a default compile Id.
     *
     * @return string
     */
    public function getDefaultCompileId()
    {
    }
    /**
     * Returns the declared multistore compatibility level
     *
     * @return int
     */
    public function getMultistoreCompatibility(): int
    {
    }
    public static function resetStaticCache()
    {
    }
}
function ps_module_version_sort($a, $b)
{
}
