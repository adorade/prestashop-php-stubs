<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

class ThemeExporter
{
    /**
     * @var ConfigurationInterface
     */
    protected $configuration;
    /**
     * @var Filesystem
     */
    protected $fileSystem;
    /**
     * @var LangRepository
     */
    protected $langRepository;
    /**
     * @var TranslationsExporter
     */
    protected $translationsExporter;
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \Symfony\Component\Filesystem\Filesystem $fileSystem, \PrestaShopBundle\Entity\Repository\LangRepository $langRepository, \PrestaShopBundle\Translation\Exporter\ThemeExporter $translationsExporter)
    {
    }
    /**
     * @param Theme $theme
     *
     * @return false|string
     */
    public function export(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme)
    {
    }
    /**
     * @param Theme $theme
     * @param string $cacheDir
     */
    protected function copyTranslations(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme, $cacheDir)
    {
    }
    protected function protectDirectory(string $cacheDir): void
    {
    }
}
