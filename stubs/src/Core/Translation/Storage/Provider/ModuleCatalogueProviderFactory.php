<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider;

class ModuleCatalogueProviderFactory
{
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Storage\Loader\DatabaseTranslationLoader $databaseTranslationLoader, \PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\LegacyModuleExtractorInterface $legacyModuleExtractor, \Symfony\Component\Translation\Loader\LoaderInterface $legacyFileLoader, string $modulesDirectory, string $translationsDirectory, \PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\ExtraPropertyTranslationExtractor $extraPropertyTranslationExtractor)
    {
    }
    public function getModuleCatalogueProvider(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ModuleProviderDefinition $providerDefinition): \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\CatalogueLayersProviderInterface
    {
    }
}
