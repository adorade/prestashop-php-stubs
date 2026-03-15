<?php

namespace PrestaShop\PrestaShop\Core\Addon\Module;

class ModuleManagerBuilder
{
    /**
     * Singleton of ModuleRepository.
     *
     * @var ModuleRepository
     */
    public static $modulesRepository = null;
    /**
     * Singleton of ModuleManager.
     *
     * @var ModuleManager
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
     * @return ModuleManager
     */
    public function build()
    {
    }
    /**
     * Returns an instance of ModuleRepository.
     *
     * @return ModuleRepository
     */
    public function buildRepository()
    {
    }
    protected function getConfigDir()
    {
    }
}
