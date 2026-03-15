<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Extractor;

/**
 * Extract all theme translations from Theme templates.
 *
 * xliff is the default file format, you can add custom File dumpers.
 */
class ThemeExtractor
{
    public function __construct(\PrestaShop\TranslationToolsBundle\Translation\Extractor\SmartyExtractor $smartyExtractor)
    {
    }
    /**
     * @param Theme $theme
     * @param string|null $locale
     *
     * @return MessageCatalogue
     *
     * @throws Exception
     */
    public function extract(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme, ?string $locale = null): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
