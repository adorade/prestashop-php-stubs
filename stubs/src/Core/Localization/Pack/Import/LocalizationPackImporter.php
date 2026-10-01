<?php

namespace PrestaShop\PrestaShop\Core\Localization\Pack\Import;

/**
 * Class LocalizationPackImporter is responsible for importing localization pack.
 */
final class LocalizationPackImporter implements \PrestaShop\PrestaShop\Core\Localization\Pack\Import\LocalizationPackImporterInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\LocalizationPackLoaderInterface $remoteLocalizationPackLoader
     * @param \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\LocalizationPackLoaderInterface $localLocalizationPackLoader
     * @param \PrestaShop\PrestaShop\Core\Localization\Pack\Factory\LocalizationPackFactoryInterface $localizationPackFactory
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
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
