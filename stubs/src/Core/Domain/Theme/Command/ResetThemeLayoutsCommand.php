<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class ResetThemeLayoutsCommand resets theme's page layouts to defaults.
 */
class ResetThemeLayoutsCommand
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeName $themeName
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeName $themeName)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeName
     */
    public function getThemeName()
    {
    }
}
