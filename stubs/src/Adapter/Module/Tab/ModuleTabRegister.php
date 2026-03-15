<?php

namespace PrestaShop\PrestaShop\Adapter\Module\Tab;

/**
 * Class responsible of register new tab in Back Office's menu.
 */
class ModuleTabRegister
{
    public const SUFFIX = '_MTR';
    /**
     * @var LangRepository
     */
    protected $langRepository;
    /**
     * @var TabRepository
     */
    protected $tabRepository;
    /**
     * @param TabRepository $tabRepository
     * @param LangRepository $langRepository
     * @param LoggerInterface $logger
     * @param TranslatorInterface $translator
     * @param Filesystem $filesystem
     * @param array $languages
     * @param Loader $routingConfigLoader
     */
    public function __construct(\PrestaShopBundle\Entity\Repository\TabRepository $tabRepository, \PrestaShopBundle\Entity\Repository\LangRepository $langRepository, \Psr\Log\LoggerInterface $logger, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\Filesystem\Filesystem $filesystem, array $languages, \Symfony\Component\Config\Loader\Loader $routingConfigLoader)
    {
    }
    /**
     * Fetch module-defined tabs and find undeclared ModuleAdminControllers.
     *
     * This is done automatically as part of the module installation.
     *
     * @param ModuleInterface $module
     */
    public function registerTabs(\PrestaShop\PrestaShop\Core\Module\ModuleInterface $module)
    {
    }
    /**
     * @param ModuleInterface $module
     */
    public function enableTabs(\PrestaShop\PrestaShop\Core\Module\ModuleInterface $module)
    {
    }
    /**
     * Looks for ModuleAdminControllers not declared as Tab and
     * add them to the list to register.
     *
     * @param string $moduleName
     * @param array $tabs
     *
     * @return array
     */
    protected function addUndeclaredTabs($moduleName, array $tabs)
    {
    }
    /**
     * Returns a list of all detected controllers, either from admin/controllers folder
     * or from the routing file.
     *
     * @param string $moduleName
     *
     * @return array
     *
     * @throws Exception
     */
    protected function getDetectedModuleControllers(string $moduleName): array
    {
    }
    /**
     * Check mandatory data for tab registration, such as class name and class exists.
     *
     * @param string $moduleName
     * @param ParameterBag $data
     *
     * @return bool (= true) when no issue detected
     *
     * @throws Exception in case of invalid data
     */
    protected function checkIsValid($moduleName, \Symfony\Component\HttpFoundation\ParameterBag $data)
    {
    }
    /**
     * Find all ModuleAdminController classes from module.
     * This allow to check a class exists for a registered tab and to register automatically all the classes
     * not explicitely declared by the module developer.
     *
     * @param string $moduleName
     *
     * @return array of Symfony\Component\Finder\SplFileInfo, listing all the ModuleAdminControllers found
     */
    protected function getModuleAdminControllers($moduleName)
    {
    }
    /**
     * Parses the routes file from the module and return the list of associated controller
     * via the _legacy_controller routing option.
     *
     * @param string $moduleName
     *
     * @return string[]
     *
     * @throws Exception
     */
    protected function getModuleControllersFromRouting(string $moduleName): array
    {
    }
    /**
     * Convert SPLFileInfo array to file names. Better & easier to check if a class to register exists.
     *
     * @param string $moduleName
     *
     * @return array of strings
     */
    protected function getModuleAdminControllersFilename($moduleName)
    {
    }
    /**
     * From the name given by the module maintainer, associate a value per language
     * installed on the shop.
     *
     * @param mixed $names
     *
     * @return array Name to use for each installed language
     */
    protected function getTabNames($names)
    {
    }
    /**
     * Install a tab according to its defined structure.
     *
     * @param ModuleInterface $module
     * @param ParameterBag $tabDetails the structure of the tab
     *
     * @throws Exception in case of error from validation or save
     */
    protected function registerTab(\PrestaShop\PrestaShop\Core\Module\ModuleInterface $module, \Symfony\Component\HttpFoundation\ParameterBag $tabDetails)
    {
    }
    /**
     * Find the parent ID from the given tab context.
     *
     * @param ParameterBag $tabDetails the structure of the tab
     *
     * @return int ID of the parent, 0 if none
     */
    protected function findParentId(\Symfony\Component\HttpFoundation\ParameterBag $tabDetails)
    {
    }
    /**
     * When the tab you add is the first child of a parent tab, we must duplicate it in the children
     * or its link will be overriden.
     *
     * @param int $idParent
     *
     * @return int new parent ID
     */
    protected function duplicateParentIfAlone($idParent)
    {
    }
}
