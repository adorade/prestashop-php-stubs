<?php

namespace PrestaShop\PrestaShop\Core\Localization\Pack\Import;

/**
 * Class LocalizationPackImporter is responsible for importing localization pack.
 */
final class LocalizationPackImporter implements \PrestaShop\PrestaShop\Core\Localization\Pack\Import\LocalizationPackImporterInterface
{
    /**
     * @param LocalizationPackLoaderInterface $remoteLocalizationPackLoader
     * @param LocalizationPackLoaderInterface $localLocalizationPackLoader
     * @param LocalizationPackFactoryInterface $localizationPackFactory
     * @param TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Pack\Loader\LocalizationPackLoaderInterface $remoteLocalizationPackLoader, \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\LocalizationPackLoaderInterface $localLocalizationPackLoader, \PrestaShop\PrestaShop\Core\Localization\Pack\Factory\LocalizationPackFactoryInterface $localizationPackFactory, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function import(\PrestaShop\PrestaShop\Core\Localization\Pack\Import\LocalizationPackImportConfig $config)
    {
    }
}
