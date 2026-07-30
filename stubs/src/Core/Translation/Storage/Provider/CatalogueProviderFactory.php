<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider;

/**
 * This factory will return the provider matching the given 'type'.
 * If the type given doesn't match one of the known types, an exception will be thrown.
 */
class CatalogueProviderFactory
{
    /**
     * @param DatabaseTranslationLoader $databaseTranslationLoader
     * @param LegacyModuleExtractorInterface $legacyModuleExtractor
     * @param LoaderInterface $legacyFileLoader
     * @param ThemeExtractor $themeExtractor
     * @param ThemeRepository $themeRepository
     * @param Filesystem $filesystem
     * @param string $themesDirectory
     * @param string $modulesDirectory
     * @param string $translationsDirectory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Storage\Loader\DatabaseTranslationLoader $databaseTranslationLoader, \PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\LegacyModuleExtractorInterface $legacyModuleExtractor, \Symfony\Component\Translation\Loader\LoaderInterface $legacyFileLoader, \PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\ThemeExtractor $themeExtractor, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository $themeRepository, \Symfony\Component\Filesystem\Filesystem $filesystem, string $themesDirectory, string $modulesDirectory, string $translationsDirectory)
    {
    }
    /**
     * @param ProviderDefinitionInterface $providerDefinition
     *
     * @return CatalogueLayersProviderInterface
     *
     * @throws UnexpectedTranslationTypeException
     */
    public function getProvider(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionInterface $providerDefinition): \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\CatalogueLayersProviderInterface
    {
    }
}
