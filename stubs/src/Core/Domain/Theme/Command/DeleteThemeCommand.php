<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class DeleteThemeCommand deletes given theme.
 */
class DeleteThemeCommand
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
