<?php

namespace PrestaShopBundle\Install;

class Install extends \PrestaShopBundle\Install\AbstractInstall
{
    public const SETTINGS_FILE = 'config/settings.inc.php';
    public const BOOTSTRAP_FILE = 'config/bootstrap.php';
    public const DEFAULT_THEME = 'classic';
    /**
     * The path of the bootsrap file we want to use for the installation.
     *
     * @var string
     */
    protected $bootstrapFile = null;
    /**
     * @var array
     */
    public $xml_loader_ids = [];
    /**
     * The path of the settings file we want to use for the installation.
     *
     * @var string
     */
    protected $settingsFile = null;
    /**
     * @var bool
     */
    protected $isDebug = null;
    /**
     * @param string|null $settingsFile
     * @param string|null $bootstrapFile
     * @param PrestaShopLoggerInterface $logger
     */
    public function __construct($settingsFile = null, $bootstrapFile = null, $logger = null)
    {
    }
    public function setError($errors)
    {
    }
    /**
     * Generate the settings file.
     */
    public function generateSettingsFile($database_host, $database_user, $database_password, $database_name, $database_prefix, $database_engine)
    {
    }
    /**
     * Replace "parameters.yml" with "parameters.php" in "app/config".
     *
     * @param array $parameters
     *
     * @return bool|int
     */
    public function processParameters($parameters)
    {
    }
    /**
     * Prevent availability of YAML parameters.
     */
    protected function emptyYamlParameters()
    {
    }
    protected function clearCache()
    {
    }
    /**
     * PROCESS : installDatabase
     * Generate settings file and create database structure.
     */
    public function installDatabase($clear_database = false)
    {
    }
    /**
     * cache:clear
     * assetic:dump
     * doctrine:schema:update.
     *
     * @return bool
     */
    public function updateSchema()
    {
    }
    /**
     * Clear database (only tables with same prefix).
     *
     * @param bool $truncate If true truncate the table, if false drop the table
     */
    public function clearDatabase($truncate = false)
    {
    }
    /**
     * Initialize the prestashop context with default values during tests.
     */
    public function initializeTestContext()
    {
    }
    /**
     * PROCESS : installDefaultData
     * Create default shop and languages.
     */
    public function installDefaultData($shop_name, $iso_country = false, $all_languages = false, $clear_database = false)
    {
    }
    /**
     * PROCESS : populateDatabase
     * Populate database with default data.
     *
     * @param string|null $entity [default=null] If provided, entity to populate
     *
     * @return bool
     */
    public function populateDatabase($entity = null)
    {
    }
    public function createShop($shop_name)
    {
    }
    /**
     * Install languages.
     *
     * @param array|null $languages_list
     *
     * @return array Association between ID and iso array(id_lang => iso, ...)
     */
    public function installLanguages($languages_list = null)
    {
    }
    public function copyLanguageImages($iso)
    {
    }
    public function getLocalizationPackContent($version, $country)
    {
    }
    /**
     * PROCESS : configureShop
     * Set default shop configuration.
     */
    public function configureShop(array $data = [])
    {
    }
    /**
     * Get all modules present on the disk
     */
    public function getModulesOnDisk(): array
    {
    }
    /**
     * Get all themes present on the disk
     */
    public function getThemesOnDisk(): array
    {
    }
    /**
     * PROCESS : installModules
     * Download module from addons and Install all modules in ~/modules/ directory.
     *
     * @param array $modules Modules to  install
     *
     * @return bool
     */
    public function installModules(array $modules): bool
    {
    }
    public function postInstall(): bool
    {
    }
    protected function executeAction(array $modules, string $action, string $errorMessage): bool
    {
    }
    /**
     * PROCESS : installFixtures
     * Install fixtures (E.g. demo products).
     */
    public function installFixtures($entity = null, array $data = [])
    {
    }
    public function installTheme(string $themeName = null): bool
    {
    }
    /**
     * Call callback with database connection temporary
     * configured with auto increment value and offset to 1.
     */
    public function callWithUnityAutoincrement(callable $callback, ...$args)
    {
    }
}
