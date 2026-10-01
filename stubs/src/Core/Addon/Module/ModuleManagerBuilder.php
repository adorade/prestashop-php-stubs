<?php

namespace PrestaShop\PrestaShop\Core\Addon\Module;

class ModuleManagerBuilder
{
    /**
     * Singleton of ModuleRepository.
     *
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository
     */
    public static $modulesRepository = null;
    /**
     * Singleton of ModuleManager.
     *
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleManager
     */
    public static $moduleManager = null;
    public static $adminModuleDataProvider = null;
    public static $lecacyContext;
    public static $legacyLogger = null;
    public static $moduleDataProvider = null;
    public static $moduleDataUpdater = null;
    public static $translator = null;
    public static $categoriesProvider = null;
    public static $instance = null;
    public static $cacheProvider = null;
    /**
     * @return ModuleManagerBuilder|null
     */
    public static function getInstance()
    {
    }
    /**
     * Returns an instance of ModuleManager.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\ModuleManager
     */
    public function build()
    {
    }
    /**
     * Returns an instance of ModuleRepository.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\ModuleRepository
     */
    public function buildRepository()
    {
    }
    protected function getConfigDir()
    {
    }
}
