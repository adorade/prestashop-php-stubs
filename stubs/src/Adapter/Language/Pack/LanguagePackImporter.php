<?php

namespace PrestaShop\PrestaShop\Adapter\Language\Pack;

/**
 * Class LanguagePackImporter is responsible for importing language pack.
 */
final class LanguagePackImporter implements \PrestaShop\PrestaShop\Core\Language\Pack\Import\LanguagePackImporterInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Language\Pack\LanguagePackInstallerInterface $languagePack
     * @param \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $entireCacheClearer
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Language\Pack\LanguagePackInstallerInterface $languagePack, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $entireCacheClearer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function import($isoCode)
    {
    }
}
