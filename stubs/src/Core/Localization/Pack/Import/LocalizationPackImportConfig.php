<?php

namespace PrestaShop\PrestaShop\Core\Localization\Pack\Import;

/**
 * Class LocalizationPackImportConfig is value object which is responsible
 * for storing localization pack configuration for import.
 */
final class LocalizationPackImportConfig implements \PrestaShop\PrestaShop\Core\Localization\Pack\Import\LocalizationPackImportConfigInterface
{
    /**
     * @param string $countryIso Country ISO code
     * @param array $contentToImport Content that should be impoerted (e.g states, taxes & etc)
     * @param bool $downloadPackData Whether pack data should be downloaded from prestashop.com server
     */
    public function __construct($countryIso, array $contentToImport, $downloadPackData)
    {
    }
    /**
     * Get country ISO code.
     *
     * @return string
     */
    public function getCountryIsoCode()
    {
    }
    /**
     * Get content to import.
     *
     * @return array
     */
    public function getContentToImport()
    {
    }
    /**
     * Whether pack data should be downloaded.
     *
     * @return bool
     */
    public function shouldDownloadPackData()
    {
    }
}
