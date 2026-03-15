<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

class ThemeManager implements \PrestaShop\PrestaShop\Core\Addon\AddonManagerInterface
{
    /**
     * @var string|null
     */
    public $sandbox;
    /**
     * @param Shop $shop
     * @param ConfigurationInterface $configuration
     * @param ThemeValidator $themeValidator
     * @param TranslatorInterface $translator
     * @param Employee $employee
     * @param Filesystem $filesystem
     * @param Finder $finder
     * @param HookConfigurator $hookConfigurator
     * @param ThemeRepository $themeRepository
     * @param ImageTypeRepository $imageTypeRepository
     */
    public function __construct(\Shop $shop, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeValidator $themeValidator, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Employee $employee, \Symfony\Component\Filesystem\Filesystem $filesystem, \Symfony\Component\Finder\Finder $finder, \PrestaShop\PrestaShop\Core\Module\HookConfigurator $hookConfigurator, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository $themeRepository, \PrestaShop\PrestaShop\Core\Image\ImageTypeRepository $imageTypeRepository, \Psr\Log\LoggerInterface $logger = null)
    {
    }
    /**
     * Add new theme from zipball. This will unzip the file and move the content
     * to the right locations.
     * A theme can bundle modules, resources, documentation, email templates and so on.
     *
     * @param string $source The source can be a module name (installed from either local disk or addons.prestashop.com).
     *                       or a location (url or path to the zip file)
     *
     * @return bool true for success
     */
    public function install($source)
    {
    }
    /**
     * Remove all theme files, resources, documentation and specific modules.
     *
     * @param string $name The source can be a module name (installed from either local disk or addons.prestashop.com).
     *                     or a location (url or path to the zip file)
     *
     * @return bool true for success
     */
    public function uninstall($name)
    {
    }
    /**
     * Download new files from source, backup old files, replace files with new ones
     * and execute all necessary migration scripts form current version to the new one.
     *
     * @param string $name
     * @param string $version the version you want to up upgrade to
     * @param string $source if the upgrade is not coming from addons, you need to specify the path to the zipball
     *
     * @return bool true for success
     */
    public function upgrade($name, $version, $source = null)
    {
    }
    /**
     * Actions to perform when switching from another theme to this one.
     * Example:
     *    - update configuration
     *    - enable/disable modules.
     *
     * @param string $name The theme name to enable
     * @param bool $force bypass user privilege checks
     *
     * @return bool True for success
     */
    public function enable($name, $force = false)
    {
    }
    /**
     * Actions to perform when switching from this theme to another one.
     *
     * @param string $name The theme name to enable
     *
     * @return bool True for success
     */
    public function disable($name)
    {
    }
    /**
     * Actions to perform to restore default settings.
     *
     * @param string $themeName The theme name to reset
     *
     * @return bool True for success
     */
    public function reset($themeName)
    {
    }
    /**
     * Returns the last error, if found.
     *
     * @param string $themeName The technical theme name
     *
     * @return void
     */
    public function getError($themeName)
    {
    }
    /**
     * Get all errors of theme install.
     *
     * @param string $themeName The technical theme name
     *
     * @return array|string|bool
     */
    public function getErrors($themeName)
    {
    }
    /**
     * @param Theme $theme
     */
    public function saveTheme($theme)
    {
    }
}
