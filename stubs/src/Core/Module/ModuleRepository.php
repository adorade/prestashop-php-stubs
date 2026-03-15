<?php

namespace PrestaShop\PrestaShop\Core\Module;

class ModuleRepository implements \PrestaShop\PrestaShop\Core\Module\ModuleRepositoryInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
    }
    public function getList(): \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
    }
    public function getInstalledModules(): \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
    }
    public function getMustBeConfiguredModules(): \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
    }
    public function getUpgradableModules(): \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
    }
    /**
     * @param string $moduleName
     *
     * @return Module
     */
    public function getModule(string $moduleName): \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
    }
    public function getModulePath(string $moduleName): ?string
    {
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection): \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
    }
    /**
     * @param string|null $moduleName The module to clear the cache for. If the name is null, the cache will be cleared for all modules.
     * @param bool $allShops Default to false. If the value is true, the cache will be cleared for all the active shops. If not it will be cleared only for the shop in the context.
     *
     * @return bool
     */
    public function clearCache(?string $moduleName = null, bool $allShops = false): bool
    {
    }
    /**
     * @param string $moduleName
     * @param int|null $shopId If this parameter is given, the key returned will be the one for the shop. Otherwise, it will be the cache key for the shop in the context.
     *
     * @return string
     */
    protected function getCacheKey(string $moduleName, ?int $shopId = null): string
    {
    }
    /**
     * @param ModuleCollection $modules
     *
     * @return ModuleCollection
     */
    protected function addModulesFromHook(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $modules): \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
    }
    /**
     * @param Module $module
     *
     * @return Module
     */
    protected function enrichModuleAttributesFromHook(\PrestaShop\PrestaShop\Adapter\Module\Module $module): \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
    }
}
