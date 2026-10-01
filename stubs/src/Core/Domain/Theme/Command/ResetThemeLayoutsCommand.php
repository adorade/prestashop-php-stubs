<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class ResetThemeLayoutsCommand resets theme's page layouts to defaults.
 */
class ResetThemeLayoutsCommand
{
    /**
     * @param string|\PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeName $themeName
     *
     * @deprecated Since 9.2 - The parameter $themeName will not support ThemeName as type in 10.0
     */
    public function __construct(string|\PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeName $themeName)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeName
     */
    public function getThemeName()
    {
    }
}
