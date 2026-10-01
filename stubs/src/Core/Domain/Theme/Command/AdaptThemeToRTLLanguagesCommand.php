<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class AdaptThemeToRTLLanguagesCommand adapts given theme to RTL languages.
 */
class AdaptThemeToRTLLanguagesCommand
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
