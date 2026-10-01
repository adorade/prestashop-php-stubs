<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

class Theme implements \PrestaShop\PrestaShop\Core\Addon\AddonInterface
{
    /**
     * @param array $attributes Theme attributes
     * @param string|null $configurationCacheDirectory Default _PS_CACHE_DIR_
     * @param string $themesDirectory Default _PS_ALL_THEMES_DIR_
     */
    public function __construct(array $attributes, ?string $configurationCacheDirectory = null, string $themesDirectory = _PS_ALL_THEMES_DIR_)
    {
    }
    public function get($attr = null, $default = null)
    {
    }
    public function has($attr)
    {
    }
    public function getName()
    {
    }
    public function getDirectory()
    {
    }
    public function getModulesToEnable()
    {
    }
    public function getModulesToDisable()
    {
    }
    public function getPageSpecificAssets($pageId)
    {
    }
    public function onInstall()
    {
    }
    public function onUninstall()
    {
    }
    /**
     * Execute up files. You can update configuration, update sql schema.
     * No file modification.
     *
     * @return bool true for success
     */
    public function onUpgrade($version)
    {
    }
    /**
     * Called when switching the current theme of the selected shop.
     * You can update configuration, enable/disable modules...
     *
     * @return bool true for success
     */
    public function onEnable()
    {
    }
    /**
     * Not necessarily the opposite of enable. Use this method if
     * something must be done when switching to another theme (like uninstall
     * very specific modules for example).
     *
     * @return bool true for success
     */
    public function onDisable()
    {
    }
    public function onReset()
    {
    }
    public function setPageLayouts(array $layouts)
    {
    }
    public function getDefaultLayout()
    {
    }
    public function getPageLayouts()
    {
    }
    public function getAvailableLayouts()
    {
    }
    /**
     * Returns layout name for page from theme configuration
     *
     * @param string $page page identifier
     *
     * @return string layout name
     */
    public function getLayoutNameForPage($page)
    {
    }
    /**
     * Returns layout relative path for provided page identifier
     *
     * @param string $page page identifier
     *
     * @return string layout relative path
     */
    public function getLayoutRelativePathForPage($page)
    {
    }
    /**
     * Returns relative path for provided layout name
     *
     * @param string $layoutName layout name
     *
     * @return string layout relative path
     */
    public function getLayoutPath($layoutName)
    {
    }
    /**
     * Defines if the theme requires core.js scripts or it provides it's own implementation.
     *
     * @return bool
     */
    public function requiresCoreScripts(): bool
    {
    }
}
