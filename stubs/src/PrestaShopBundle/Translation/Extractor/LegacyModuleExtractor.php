<?php

namespace PrestaShopBundle\Translation\Extractor;

/**
 * Able to convert old translation files (in translations/es.php) into
 * Symfony MessageCatalogue objects.
 */
final class LegacyModuleExtractor implements \PrestaShopBundle\Translation\Extractor\LegacyModuleExtractorInterface
{
    /**
     * @param ExtractorInterface $phpExtractor
     * @param ExtractorInterface $smartyExtractor
     * @param ExtractorInterface $twigExtractor
     * @param string $modulesDirectory
     */
    public function __construct(\Symfony\Component\Translation\Extractor\ExtractorInterface $phpExtractor, \Symfony\Component\Translation\Extractor\ExtractorInterface $smartyExtractor, \Symfony\Component\Translation\Extractor\ExtractorInterface $twigExtractor, $modulesDirectory)
    {
    }
    /**
     * {@inheritdoc}
     *
     * WARNING: The domains in the returned catalogue are dot-separated
     */
    public function extract($moduleName, $locale)
    {
    }
}
