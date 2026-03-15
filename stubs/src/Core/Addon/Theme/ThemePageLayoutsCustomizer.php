<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

/**
 * Class PagesLayoutCustomizer customizes pages layout for shop's Front Office theme.
 */
final class ThemePageLayoutsCustomizer implements \PrestaShop\PrestaShop\Core\Addon\Theme\ThemePageLayoutsCustomizerInterface
{
    /**
     * @param Theme $theme
     * @param ThemeManager $themeManager
     * @param CacheClearerInterface $smartyCacheClearer
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $smartyCacheClearer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function customize(array $pageLayouts)
    {
    }
}
