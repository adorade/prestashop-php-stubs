<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

/**
 * Class ThemeProvider
 */
final class ThemeProvider implements \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeProviderInterface
{
    /**
     * @param ThemeRepository $themeRepository
     * @param Theme $theme
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository $themeRepository, \PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCurrentlyUsedTheme()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getNotUsedThemes()
    {
    }
}
