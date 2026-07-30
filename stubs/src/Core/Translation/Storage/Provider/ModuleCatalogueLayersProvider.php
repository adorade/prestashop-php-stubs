<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider;

/**
 * Returns the 3 layers of translation catalogues related to the Module translations.
 * The default catalogue is searched in app/Resources/translations/default, in any file starting with "ModulesMODULENAME"
 * If not found, default catalogue is extracted for module's templates
 * The file catalogue is searched in app/Resources/translations/LOCALE, in any file starting with "ModulesMODULENAME"
 * If not found, we scan the directory modules/MODULENAME/translations/LOCALE
 * The user catalogue is stored in DB, domain starting with ModulesMODULENAME and theme is NULL.
 *
 * @see CatalogueLayersProviderInterface to understand the 3 layers.
 */
class ModuleCatalogueLayersProvider implements \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\CatalogueLayersProviderInterface
{
    /**
     * @param DatabaseTranslationLoader $databaseTranslationLoader
     * @param LegacyModuleExtractorInterface $legacyModuleExtractor
     * @param LoaderInterface $legacyFileLoader
     * @param string $modulesDirectory
     * @param string $translationsDirectory
     * @param string $moduleName
     * @param array<int, string> $filenameFilters
     * @param array<int, string> $translationDomains
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Storage\Loader\DatabaseTranslationLoader $databaseTranslationLoader, \PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\LegacyModuleExtractorInterface $legacyModuleExtractor, \Symfony\Component\Translation\Loader\LoaderInterface $legacyFileLoader, string $modulesDirectory, string $translationsDirectory, string $moduleName, array $filenameFilters, array $translationDomains)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultCatalogue(string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
    /**
     * @param string $locale
     *
     * @return MessageCatalogue
     */
    public function getFileTranslatedCatalogue(string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getUserTranslatedCatalogue(string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
