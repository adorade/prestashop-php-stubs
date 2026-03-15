<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider;

/**
 * Returns the 3 layers of translation catalogues related to the Theme translations.
 * The default catalogue is extracted from Theme's templates
 * The file catalogue is extracted from Core's file (in any file starting with "Shop") and from theme directory themes/THEMENAME/translations
 * The user catalogue is stored in DB, domain starting with Shop and theme is equal to the desired theme.
 *
 * @see CatalogueLayersProviderInterface to understand the 3 layers.
 */
class ThemeCatalogueLayersProvider implements \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\CatalogueLayersProviderInterface
{
    /**
     * @param ModuleCatalogueProviderFactory $moduleCatalogueProviderFactory
     * @param CatalogueLayersProviderInterface $coreFrontProvider
     * @param DatabaseTranslationLoader $databaseTranslationLoader
     * @param ThemeExtractor $themeExtractor
     * @param ThemeRepository $themeRepository
     * @param Filesystem $filesystem
     * @param string $themeResourcesDir
     * @param string $themeName
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\ModuleCatalogueProviderFactory $moduleCatalogueProviderFactory, \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\CatalogueLayersProviderInterface $coreFrontProvider, \PrestaShop\PrestaShop\Core\Translation\Storage\Loader\DatabaseTranslationLoader $databaseTranslationLoader, \PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\ThemeExtractor $themeExtractor, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository $themeRepository, \Symfony\Component\Filesystem\Filesystem $filesystem, string $themeResourcesDir, string $themeName)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultCatalogue(string $locale, bool $refreshCache = false): \Symfony\Component\Translation\MessageCatalogue
    {
    }
    /**
     * @param string $locale
     *
     * @return MessageCatalogue
     *
     * The **file** translated catalogue for a theme other than classic corresponds
     * to the core files, overwritten by the user-translated core wordings (if any), overwritten
     * by the theme files (if any)
     */
    public function getFileTranslatedCatalogue(string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
    /**
     * @param string $locale
     *
     * @return MessageCatalogue
     */
    public function getUserTranslatedCatalogue(string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
