<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class DeleteThemeCommand deletes given theme.
 */
class DeleteThemeCommand
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
