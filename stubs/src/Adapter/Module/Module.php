<?php

namespace PrestaShop\PrestaShop\Adapter\Module;

/**
 * This class is the interface to the legacy Module class.
 *
 * It will allow current modules to work even with the new ModuleManager
 */
class Module implements \PrestaShop\PrestaShop\Core\Module\ModuleInterface
{
    public const ACTION_INSTALL = 'install';
    public const ACTION_UNINSTALL = 'uninstall';
    public const ACTION_ENABLE = 'enable';
    public const ACTION_DISABLE = 'disable';
    public const ACTION_ENABLE_MOBILE = 'enableMobile';
    public const ACTION_DISABLE_MOBILE = 'disableMobile';
    public const ACTION_RESET = 'reset';
    public const ACTION_UPGRADE = 'upgrade';
    public const ACTION_CONFIGURE = 'configure';
    public const ACTION_DELETE = 'delete';
    /**
     * @var LegacyModule Module The instance of the legacy module
     */
    public $instance = null;
    /**
     * Module attributes (name, displayName etc.).
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    public $attributes;
    /**
     * Module attributes from disk.
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    public $disk;
    /**
     * Module attributes from database.
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    public $database;
    /**
     * @param array $attributes
     * @param array $disk
     * @param array $database
     */
    public function __construct(array $attributes = [], array $disk = [], array $database = [])
    {
    }
    /**
     * @return LegacyModule|null
     */
    public function getInstance(): ?\Module
    {
    }
    /**
     * @return bool True if valid Module instance
     */
    public function hasValidInstance(): bool
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
    public function isActiveOnMobile(): bool
    {
    }
    public function isInstalled(): bool
    {
    }
    public function isUninstalled(): bool
    {
    }
    public function isConfigurable(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function onInstall(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function onPostInstall(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function onUninstall(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function onUpgrade(string $version): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function onEnable(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function onDisable(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function onMobileEnable(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function onMobileDisable(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function onReset(): bool
    {
    }
    public function getAttributes(): \Symfony\Component\HttpFoundation\ParameterBag
    {
    }
    public function getDiskAttributes(): \Symfony\Component\HttpFoundation\ParameterBag
    {
    }
    public function getDatabaseAttributes(): \Symfony\Component\HttpFoundation\ParameterBag
    {
    }
    /**
     * Retrieve an instance of Legacy Module Object model from data.
     */
    protected function instanciateLegacyModule()
    {
    }
    /**
     * @param string $attribute
     *
     * @return mixed
     */
    public function get($attribute)
    {
    }
    /**
     * @param string $attribute
     * @param mixed $value
     */
    public function set($attribute, $value)
    {
    }
    /**
     * Set the module logo.
     */
    public function fillLogo()
    {
    }
    /**
     * Inform the merchant an upgrade is wating to be applied from the disk or the marketplace.
     *
     * @return bool
     */
    public function canBeUpgraded()
    {
    }
    /**
     * Only check if an upgrade is available
     *
     * @return bool
     */
    public function hasNewVersionAvailable(): bool
    {
    }
    /**
     * Return installed modules.
     *
     * @param int $position Take only positionnables modules
     *
     * @return array Modules
     */
    public function getModulesInstalled($position = 0)
    {
    }
    /**
     * Return an instance of the specified module.
     *
     * @param int $moduleId Module id
     *
     * @return Module|false
     */
    public function getInstanceById($moduleId)
    {
    }
}
