<?php

namespace PrestaShop\PrestaShop\Core\Addon\Module;

class ModuleManagerBuilder
{
    /**
     * Singleton of ModuleRepository.
     *
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository
     */
    protected static $modulesRepository = null;
    /**
     * Singleton of ModuleManager.
     *
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleManager
     */
    protected static $moduleManager = null;
    protected static $adminModuleDataProvider = null;
    protected static $legacyLogger = null;
    protected static $moduleDataProvider = null;
    protected static $translator = null;
    protected static $instance = null;
    protected static $cacheProvider = null;
    /**
     * @var \PrestaShop\PrestaShop\Core\Context\ApiClientContext
     */
    protected static $apiClientContext;
    /**
     * @var \PrestaShop\PrestaShop\Core\Context\LanguageContext|null
     */
    protected static $languageContext = null;
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
