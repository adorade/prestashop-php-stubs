<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class AdaptThemeToRTLLanguagesCommand adapts given theme to RTL languages.
 */
class AdaptThemeToRTLLanguagesCommand
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
