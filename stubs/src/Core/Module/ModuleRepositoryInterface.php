<?php

namespace PrestaShop\PrestaShop\Core\Module;

interface ModuleRepositoryInterface
{
    public function getList(): \PrestaShop\PrestaShop\Core\Module\ModuleCollection;
    public function getInstalledModules(): \PrestaShop\PrestaShop\Core\Module\ModuleCollection;
    public function getUpgradableModules(): \PrestaShop\PrestaShop\Core\Module\ModuleCollection;
    public function getMustBeConfiguredModules(): \PrestaShop\PrestaShop\Core\Module\ModuleCollection;
    public function getModule(string $moduleName): \PrestaShop\PrestaShop\Core\Module\ModuleInterface;
    public function getModulePath(string $moduleName): ?string;
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $moduleCollection): \PrestaShop\PrestaShop\Core\Module\ModuleCollection;
}
