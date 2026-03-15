<?php

namespace PrestaShop\PrestaShop\Core\Language\Pack\Import;

/**
 * Interface LanguagePackImporterInterface contract for language importer.
 */
interface LanguagePackImporterInterface
{
    /**
     * Imports language pack.
     *
     * @param string $isoCode
     *
     * @return array - returns array with error messages or an empty array on success case
     */
    public function import($isoCode);
}
