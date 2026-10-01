<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Command;

/**
 * Class ImportThemeCommand imports theme from given source.
 */
class ImportThemeCommand
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeImportSource|string $importSource
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile|string $source
     *
     * @deprecated Since 9.2 - The parameter $importSource will not support ThemeImportSource as type in 10.0
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeImportSource|string $importSource, \Symfony\Component\HttpFoundation\File\UploadedFile|string|null $source = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeImportSource
     */
    public function getImportSource()
    {
    }
}
