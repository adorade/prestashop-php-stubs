<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider;

/**
 * Returns the 3 layers of translation catalogues related to the Core interface translations.
 * The files pattern depends on the desired Type
 * The default catalogue is in app/Resources/translations/default, in any file starting with "files pattern"
 * The file catalogue is in app/Resources/translations/LOCALE, in any file starting with "files pattern"
 * The user catalogue is stored in DB, domain starting with "files pattern" and theme is NULL.
 *
 * @see CatalogueLayersProviderInterface to understand the 3 layers.
 */
class CoreCatalogueLayersProvider implements \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\CatalogueLayersProviderInterface
{
    /**
     * @param DatabaseTranslationLoader $databaseTranslationLoader
     * @param string $resourceDirectory
     * @param array<int, string> $filenameFilters
     * @param array<int, string> $translationDomains
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Storage\Loader\DatabaseTranslationLoader $databaseTranslationLoader, string $resourceDirectory, array $filenameFilters, array $translationDomains)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws TranslationFilesNotFoundException
     */
    public function getDefaultCatalogue(string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
    /**
     * {@inheritdoc}
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
