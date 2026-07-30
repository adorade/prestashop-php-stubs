<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Extractor;

/**
 * Able to convert old translation files (in translations/es.php) into
 * Symfony MessageCatalogue objects.
 */
final class LegacyModuleExtractor implements \PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\LegacyModuleExtractorInterface
{
    /**
     * @param PhpExtractor $phpExtractor
     * @param SmartyExtractor $smartyExtractor
     * @param TwigExtractor $twigExtractor
     * @param string $modulesDirectory
     * @param array $catalogueExtractExcludedDirectories
     */
    public function __construct(\PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor $phpExtractor, \PrestaShop\TranslationToolsBundle\Translation\Extractor\SmartyExtractor $smartyExtractor, \PrestaShop\TranslationToolsBundle\Translation\Extractor\TwigExtractor $twigExtractor, string $modulesDirectory, array $catalogueExtractExcludedDirectories)
    {
    }
    /**
     * {@inheritdoc}
     *
     * WARNING: The domains in the returned catalogue are dot-separated
     */
    public function extract(string $moduleName, string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
