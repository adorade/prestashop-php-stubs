<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

/**
 * Interface ThemeProviderInterface
 */
interface ThemeProviderInterface
{
    /**
     * Get currently used theme for context shop.
     *
     * @return Theme
     */
    public function getCurrentlyUsedTheme();
    /**
     * Get not used themes for context shop.
     *
     * @return Theme[]
     */
    public function getNotUsedThemes();
}
