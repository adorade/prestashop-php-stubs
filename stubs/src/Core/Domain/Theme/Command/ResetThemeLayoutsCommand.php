<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class ResetThemeLayoutsCommand resets theme's page layouts to defaults.
 */
class ResetThemeLayoutsCommand
{
    /**
     * @param ThemeName $themeName
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeName $themeName)
    {
    }
    /**
     * @return ThemeName
     */
    public function getThemeName()
    {
    }
}
