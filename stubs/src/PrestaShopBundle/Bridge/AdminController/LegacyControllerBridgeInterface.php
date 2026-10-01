<?php

namespace PrestaShopBundle\Bridge\AdminController;

/**
 * This interface will be shared with legacy and expose legacy methods needed for modules.
 */
interface LegacyControllerBridgeInterface
{
    public const DEFAULT_THEME = 'default';
    /**
     * Sets default media list for this controller.
     *
     * @param bool $isNewTheme
     *
     * @return void
     */
    public function setMedia(bool $isNewTheme = false): void;
    /**
     * Adds a new stylesheet(s) to the page header.
     *
     * @param string|array $cssUri
     * @param string $cssMediaType
     * @param int|null $offset
     * @param bool $checkPath
     *
     * @return void
     */
    public function addCSS($cssUri, $cssMediaType = 'all', $offset = null, $checkPath = true): void;
    /**
     * Adds a new JavaScript file(s) to the page header.
     *
     * @param string|array $jsUri
     * @param bool $checkPath
     *
     * @return void
     */
    public function addJS($jsUri, $checkPath = true): void;
    /**
     * Adds jQuery plugin(s) to queued JS file list.
     *
     * @param array|string $name
     * @param string|null $folder
     * @param bool $css
     *
     * @return void
     */
    public function addJqueryPlugin($name, $folder = null, $css = true): void;
    /**
     * Adds jQuery UI component(s) to queued JS file list.
     *
     * @param array $component
     * @param string $theme
     * @param bool $checkDependencies
     *
     * @return void
     */
    public function addJqueryUI($component, $theme = 'base', $checkDependencies = true): void;
}
