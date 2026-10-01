<?php

namespace PrestaShop\PrestaShop\Adapter\Module;

/**
 * Data provider for new Architecture, about Module object model.
 *
 * This class will provide data from DB / ORM about Modules for the Admin interface.
 * This is an Adapter that works with the Legacy code and persistence behaviors.
 */
class AdminModuleDataProvider implements \PrestaShopBundle\Service\DataProvider\Admin\ModuleInterface
{
    /**
     * @const array giving a translation label for each module action
     */
    public const ACTIONS_TRANSLATION_LABELS = [\PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_INSTALL => 'Install', \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_UNINSTALL => 'Uninstall', \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_ENABLE => 'Enable', \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_DISABLE => 'Disable', \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_RESET => 'Reset', \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_UPGRADE => 'Update', \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_UPLOAD => 'Upload', \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_CONFIGURE => 'Configure', \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_DELETE => 'Delete'];
    /**
     * @var array<string> of defined and callable module actions
     */
    protected $moduleActions = [\PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_ENABLE, \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_INSTALL, \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_CONFIGURE, \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_DISABLE, \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_RESET, \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_UPGRADE, \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_UNINSTALL, \PrestaShop\PrestaShop\Adapter\Module\Module::ACTION_DELETE];
    /**
     * @var array
     */
    protected $catalog_modules = [];
    /**
     * @var array
     */
    protected $catalog_modules_names;
    /**
     * @var bool
     */
    public $failed = false;
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleProvider, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly ?\Employee $employee = null, ?\PrestaShop\PrestaShop\Core\Context\ApiClientContext $apiClientContext = null)
    {
    }
    /**
     * @param \Symfony\Component\Routing\Router $router
     */
    public function setRouter(\Symfony\Component\Routing\Router $router)
    {
    }
    /**
     * @deprecated since version 1.7.3.0
     *
     * @return array
     */
    public function getAllModules()
    {
    }
    /**
     * Check the permissions of the current context (CLI or employee) for a module.
     *
     * @param array $actions Actions to check
     * @param string $name The module name
     *
     * @return array of allowed actions
     */
    protected function filterAllowedActions(array $actions, $name = '')
    {
    }
    /**
     * Check the permissions of the current context (CLI or employee) for a specified action.
     *
     * @param string $action The action called in the module
     * @param string $name (Optionnal for 'install') The module name to check
     *
     * @return bool
     */
    public function isAllowedAccess($action, $name = '')
    {
    }
    /**
     * Generates a list with actions and their respective URLs, depending on if the module is installed or not,
     * enabled, upgradable and other variables.
     *
     * @param \PrestaShop\PrestaShop\Core\Module\ModuleCollection $modules
     * @param string|null $specific_action
     *
     * @return \PrestaShop\PrestaShop\Core\Module\ModuleCollection
     */
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $modules, ?string $specific_action = null): \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
    }
    /**
     * @param array $modules
     * @param array $filters
     *
     * @return array
     */
    protected function applyModuleFilters(array $modules, array $filters)
    {
    }
    /**
     * @param array $actions Actions to get labels for
     *
     * @return array with labels
     */
    protected function getUrlsLabels(array $actions)
    {
    }
}
