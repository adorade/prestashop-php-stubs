<?php

namespace PrestaShop\PrestaShop\Adapter\Module\Configuration;

/**
 * This class allow system users and developers to configure their module
 * with a single config file.
 *
 * Use validate() to check everything is ready to run.
 * Use configure() to run the configuration with the provided parameters.
 */
class ModuleSelfConfigurator
{
    /**
     * @var string|null the module name
     */
    protected $module;
    /**
     * @var string|null
     */
    protected $configFile;
    /**
     * @var array
     */
    protected $configs = [];
    /**
     * @var string
     */
    protected $defaultConfigFile = 'self_config.yml';
    /**
     * @var ModuleRepository
     */
    protected $moduleRepository;
    /**
     * @var Configuration
     */
    protected $configuration;
    /**
     * @var Connection
     */
    protected $connection;
    /**
     * @var Filesystem
     */
    protected $filesystem;
    public function __construct(\PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \Doctrine\DBAL\Connection $connection, \Symfony\Component\Filesystem\Filesystem $filesystem)
    {
    }
    /**
     * Alias for $module setter.
     *
     * @param string $name
     *
     * @return $this
     */
    public function module($name)
    {
    }
    /**
     * Set the module to be updated with its name.
     *
     * @param string $name
     *
     * @return $this
     *
     * @throws UnexpectedTypeException
     */
    public function setModule($name)
    {
    }
    /**
     * If defined, get the config file path or if possible, guess it.
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public function getFile()
    {
    }
    /**
     *  Alias for config file setter.
     *
     * @param string $filepath
     *
     * @return $this
     */
    public function file($filepath)
    {
    }
    /**
     * Set the config file to parse.
     *
     * @param string $filepath
     *
     * @return $this
     *
     * @throws UnexpectedTypeException
     */
    public function setFile($filepath)
    {
    }
    /**
     * In order to prevent some failure, we can check all pre-requesites are respected.
     * Any error will be reported in the array.
     *
     * @return array
     */
    public function validate()
    {
    }
    /**
     * Launch the self configuration with all the context previously set!
     *
     * @return bool
     */
    public function configure()
    {
    }
    // PROTECTED ZONE
    /**
     * Helper function which adds the relative path from the YML config file.
     * Do not alter URLs.
     *
     * @param string $file
     *
     * @return string
     */
    protected function convertRelativeToAbsolutePaths($file)
    {
    }
    /**
     * Finds and returns filepath from a config key in the YML config file.
     * Can be a string of a value of "file" key.
     *
     * @param array|string $data
     *
     * @return string
     *
     * @throws Exception if file data not provided
     */
    protected function extractFilePath($data)
    {
    }
    /**
     * Require a PHP file and instanciate the class of the same name in it.
     *
     * @param string $file
     *
     * @return object
     */
    protected function loadPhpFile($file)
    {
    }
    /**
     * Parse and return the YML content.
     *
     * @param string $file
     *
     * @return array
     */
    protected function loadYmlFile($file)
    {
    }
    /**
     * Run configuration for "configuration" step.
     *
     * @param array $config
     */
    protected function runConfigurationStep($config)
    {
    }
    /**
     * Run configuration for "file" step.
     *
     * @param array $config
     */
    protected function runFilesStep($config)
    {
    }
    /**
     * Run configuration for "php" step.
     *
     * @param array $config
     */
    protected function runPhpStep($config)
    {
    }
    /**
     * Run configuration for "sql" step.
     *
     * @param array $config
     */
    protected function runSqlStep($config)
    {
    }
    /**
     * Subtask of Sql step. Get and prepare all SQL requests from a file.
     *
     * @param array $data
     */
    protected function runSqlFile($data)
    {
    }
    /**
     * Subtask of configuration step, for all configuration key to update.
     *
     * @param array $config
     *
     * @throws Exception
     */
    protected function runConfigurationUpdate($config)
    {
    }
    /**
     * Subtask of configuration step, for all configuration keys to delete.
     *
     * @param array $config
     */
    protected function runConfigurationDelete($config)
    {
    }
}
