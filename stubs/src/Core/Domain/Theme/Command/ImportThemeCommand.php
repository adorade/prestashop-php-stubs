<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class ImportThemeCommand imports theme from given source.
 */
class ImportThemeCommand
{
    /**
     * @param ThemeImportSource $importSource
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeImportSource $importSource)
    {
    }
    /**
     * @return ThemeImportSource
     */
    public function getImportSource()
    {
    }
}
