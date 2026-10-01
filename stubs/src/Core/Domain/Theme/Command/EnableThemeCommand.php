<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class EnableThemeCommand enables given Front Office theme for context's shop.
 */
class EnableThemeCommand
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
