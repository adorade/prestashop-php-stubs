<?php

namespace PrestaShop\PrestaShop\Core\Localization\Pack\Import;

/**
 * Interface LocalizationPackImporterInterface defines contract for localization importer.
 */
interface LocalizationPackImporterInterface
{
    /**
     * Import localization pack.
     *
     * @param LocalizationPackImportConfig $config
     *
     * @return array Returns errors if any or empty array otherwise
     */
    public function import(\PrestaShop\PrestaShop\Core\Localization\Pack\Import\LocalizationPackImportConfig $config);
}
