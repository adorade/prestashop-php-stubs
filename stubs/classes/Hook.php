<?php

class HookCore extends \ObjectModel
{
    /**
     * @var string Hook name identifier
     */
    public $name;
    /**
     * @var string Hook title (displayed in BO)
     */
    public $title;
    /**
     * @var string Hook description
     */
    public $description;
    /**
     * @var bool
     */
    public $position = \false;
    /**
     * @var bool
     */
    public $active = \true;
    /**
     * @var array List of executed hooks on this page
     */
    public static $executed_hooks = [];
    public static $native_module;
    protected static $disabledHookModules = [];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'hook', 'primary' => 'id_hook', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isHookName', 'required' => \true, 'size' => 191], 'title' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName'], 'description' => ['type' => self::TYPE_HTML, 'validate' => 'isCleanHtml', 'size' => 4194303], 'position' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    /**
     * List of all deprecated hooks.
     *
     * @var array
     */
    protected static $deprecated_hooks = [
        // Back office
        'backOfficeFooter' => ['from' => '1.7.0.0'],
        'displayBackOfficeFooter' => ['from' => '1.7.0.0'],
        // Shipping step
        'displayCarrierList' => ['from' => '1.7.0.0'],
        'extraCarrier' => ['from' => '1.7.0.0'],
        // Payment step
        'hookBackBeforePayment' => ['from' => '1.7.0.0'],
        'hookDisplayBeforePayment' => ['from' => '1.7.0.0'],
        'hookOverrideTOSDisplay' => ['from' => '1.7.0.0'],
        // Product page
        'displayProductTabContent' => ['from' => '1.7.0.0'],
        'displayProductTab' => ['from' => '1.7.0.0'],
        // Order page
        'displayAdminOrderRight' => ['from' => '1.7.7.0'],
        'displayAdminOrderLeft' => ['from' => '1.7.7.0'],
        'displayAdminOrderTabOrder' => ['from' => '1.7.7.0'],
        'displayAdminOrderTabShip' => ['from' => '1.7.7.0'],
        'displayAdminOrderContentOrder' => ['from' => '1.7.7.0'],
        'displayAdminOrderContentShip' => ['from' => '1.7.7.0'],
        // Controller
        'actionAjaxDieBefore' => ['from' => '1.6.1.1'],
        'actionGetProductPropertiesAfter' => ['from' => '1.7.8.0'],
    ];
    public const MODULE_LIST_BY_HOOK_KEY = 'hook_module_exec_list_';
    public function add($autodate = \true, $null_values = \false)
    {
    }
    public function clearCache($all = \false)
    {
    }
    /**
     * Returns the canonical name for a given hook.
     *
     * @param string $hookName
     *
     * @return string
     */
    public static function normalizeHookName($hookName)
    {
    }
    /**
     * Return true if the hook name starts with "display"
     *
     * @param string $hook_name The name of the hook to check
     *
     * @return bool
     */
    public static function isDisplayHookName($hook_name)
    {
    }
    /**
     * Return Hooks List.
     *
     * @param bool $position
     *
     * @return array Hooks List
     */
    public static function getHooks($position = \false, $only_display_hooks = \false)
    {
    }
    /**
     * Returns the hook ID from a given hook name.
     *
     * By default, if the provided hook name is an alias, this method will return the id of their canonical hook.
     * Otherwise, it will treat the alias as a normal hook and will return false if it's not registered in the hooks table.
     *
     * @param string $hookName Hook name
     * @param bool $withAliases [default=true] Set to FALSE to ignore hook aliases
     * @param bool $refreshCache [default=false] Set to TRUE to force cache refresh
     *
     * @return int|false Hook ID, or false if it doesn't exist
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getIdByName($hookName, bool $withAliases = \true, bool $refreshCache = \false)
    {
    }
    /**
     * Return hook ID from name.
     *
     * @return string Hook name
     *
     * @throws PrestaShopObjectNotFoundException
     */
    public static function getNameById($hook_id)
    {
    }
    /**
     * Indicates whether the provided hook is an alias of another one
     *
     * @param string $hookName Hook name to test
     *
     * @return bool TRUE if the hook is an alias, false otherwise
     *
     * @throws PrestaShopDatabaseException
     */
    public static function isAlias(string $hookName): bool
    {
    }
    /**
     * Returns a list containing the canonical name for the provided hook name followed by all its aliases.
     *
     * @param string $hookName
     *
     * @return array
     */
    public static function getAllKnownNames(string $hookName): array
    {
    }
    /**
     * Check if a hook is callable on a module.
     *
     * @param Module $module Module instance
     * @param string $hookName Hook name
     * @param bool $strict [default=false] Set to TRUE to avoid checking if aliases are callable as well
     *
     * @return bool
     *
     * @since 1.7.1.0
     */
    public static function isHookCallableOn(\Module $module, string $hookName, $strict = \false): bool
    {
    }
    /**
     * Get list of all registered hooks with modules, indexed by hook id and module id
     *
     * @since 1.5.0
     *
     * @return array<int, array<int, array{id_hook:string|int,title:string,description:string,'hm.position':string|int,'m.position':string|int,id_module:string,name:string,active:string|int}>>
     */
    public static function getHookModuleList()
    {
    }
    /**
     * Return Hooks List.
     *
     * @since 1.5.0
     *
     * @param int $id_hook
     * @param int|null $id_module
     *
     * @return array Modules List
     */
    public static function getModulesFromHook($id_hook, $id_module = \null)
    {
    }
    public static function isModuleRegisteredOnHook($module_instance, $hook_name, $id_shop)
    {
    }
    /**
     * Registers a module to a given hook
     *
     * @param ModuleCore $module_instance The affected module
     * @param string|string[] $hook_name Hook name(s) to register this module to
     * @param int[]|null $shop_list List of shop ids
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public static function registerHook($module_instance, $hook_name, $shop_list = \null)
    {
    }
    /**
     * Unhooks a module from given hook
     *
     * @param ModuleCore $module_instance The module to unhook
     * @param int|string $hook_identifier Hook ID or hook name to unhook the module from
     * @param int[]|null $shop_list List of shop ids
     *
     * @return bool
     */
    public static function unregisterHook($module_instance, $hook_identifier, $shop_list = \null)
    {
    }
    /**
     * Returns a list of modules that are registered for a given hook, each following this schema:
     *
     * ```
     *     [
     *         'id_hook' => $hookId,
     *         'module' => $moduleName,
     *         'id_module' => $moduleId
     *     ]
     * ```
     *
     * If no hook name is given, it returns all the hook registrations, indexed by lower cased hook name.
     *
     * @param string|null $hookName Hook name (null to return all hooks)
     *
     * @return array[]|false returns an array of hook registrations, or false if the provided hook name is not registered
     *
     * @throws PrestaShopDatabaseException
     *
     * @since 1.5.0
     */
    public static function getHookModuleExecList($hookName = \null)
    {
    }
    /**
     * Add a module ID to the list of modules that should not execute hooks
     */
    public static function disableHooksForModule(int $moduleId): void
    {
    }
    /**
     * Execute modules for specified hook.
     *
     * @param string $hook_name Hook Name
     * @param array $hook_args Parameters for the functions
     * @param string|int|null $id_module Execute hook for this module only
     * @param bool $array_return If specified, the result will be provided in an array [module_name => module_output]
     * @param bool $check_exceptions Check if this function should respect hook controller exceptions configured in backoffice
     * @param bool $use_push Force change to be refreshed on Dashboard widgets (unused)
     * @param int|null $id_shop If specified, hook will be execute the shop with this ID
     * @param bool $chain If specified, each module on this hook will receive the result of the previous one
     *
     * @throws PrestaShopException
     *
     * @return mixed|null Module's output
     */
    public static function exec($hook_name, $hook_args = [], $id_module = \null, $array_return = \false, $check_exceptions = \true, $use_push = \false, $id_shop = \null, $chain = \false)
    {
    }
    public static function coreCallHook($module, $method, $params)
    {
    }
    public static function coreRenderWidget($module, $hook_name, $params)
    {
    }
    /**
     * Return status from a given hook name.
     *
     * @param string $hook_name Hook name
     *
     * @return bool
     */
    public static function getHookStatusByName($hook_name): bool
    {
    }
}
