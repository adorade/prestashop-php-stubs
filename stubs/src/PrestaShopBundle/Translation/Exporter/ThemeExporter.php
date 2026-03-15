<?php

namespace PrestaShopBundle\Translation\Exporter;

class ThemeExporter
{
    /**
     * @var string the cache directory path
     */
    public $cacheDir;
    /**
     * @var string the export directory path
     */
    public $exportDir;
    public function __construct(\PrestaShopBundle\Translation\Extractor\ThemeExtractor $themeExtractor, \PrestaShopBundle\Translation\Provider\ThemeProvider $themeProvider, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository $themeRepository, \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper $dumper, \PrestaShopBundle\Utils\ZipManager $zipManager, \Symfony\Component\Filesystem\Filesystem $filesystem)
    {
    }
    /**
     * @param string $themeName
     * @param string $locale
     * @param bool $rootDir
     *
     * @return string
     */
    public function createZipArchive($themeName, $locale, $rootDir = false)
    {
    }
    /**
     * @param string $themeName
     * @param string $locale
     * @param bool $rootDir
     *
     * @return string
     */
    public function exportCatalogues($themeName, $locale, $rootDir = false)
    {
    }
    /**
     * @param string $exportDir
     */
    public function setExportDir($exportDir)
    {
    }
    /**
     * @param string $filePath
     *
     * @return bool
     *
     * @throws \Exception
     */
    protected function ensureFileBelongsToExportDirectory($filePath)
    {
    }
    /**
     * @param string $themeName
     * @param string $locale
     * @param bool $rootDir
     *
     * @return \Symfony\Component\Translation\MessageCatalogue
     */
    protected function getCatalogueExtractedFromTemplates($themeName, $locale, $rootDir = false)
    {
    }
    /**
     * @param string $locale
     * @param string $archiveParentDirectory
     */
    protected function renameCatalogues($locale, $archiveParentDirectory)
    {
    }
    /**
     * @param string $themeName
     */
    public function cleanArtifacts($themeName)
    {
    }
    /**
     * @param string $themeName
     *
     * @return string
     */
    protected function getTemporaryExtractionFolder($themeName)
    {
    }
    /**
     * @param string $themeName
     *
     * @return string
     */
    protected function getFlattenizationFolder($themeName)
    {
    }
    /**
     * @param string $themeName
     *
     * @return string
     */
    protected function getExportDir($themeName)
    {
    }
    /**
     * @param string $themeName
     * @param string $locale
     *
     * @return string
     */
    protected function makeZipFilename($themeName, $locale)
    {
    }
    /**
     * @param string $themeName
     * @param string $locale
     *
     * @return string
     *
     * @throws \Exception
     */
    protected function makeArchiveParentDirectory($themeName, $locale)
    {
    }
    /**
     * @param MessageCatalogue $catalogue
     */
    protected function updateCatalogueMetadata(\Symfony\Component\Translation\MessageCatalogue $catalogue)
    {
    }
    /**
     * @param MessageCatalogue $catalogue
     * @param array $messages
     * @param string $domain
     */
    protected function ensureCatalogueHasRequiredMetadata(\Symfony\Component\Translation\MessageCatalogue $catalogue, array $messages, $domain)
    {
    }
    /**
     * @param array|null $metadata
     *
     * @return bool
     */
    protected function metadataContainNotes(array $metadata = null)
    {
    }
    /**
     * @param array|null $metadata
     *
     * @return bool
     */
    protected function shouldAddFileMetadata(array $metadata = null)
    {
    }
    /**
     * @param string $locale
     * @param MessageCatalogue $sourceCatalogue
     *
     * @return MessageCatalogue
     */
    protected function addLocaleToDomain($locale, \Symfony\Component\Translation\MessageCatalogue $sourceCatalogue)
    {
    }
    /**
     * @param array|null $metadata
     *
     * @return array
     */
    protected function parseMetadataNotes(array $metadata = null)
    {
    }
}
