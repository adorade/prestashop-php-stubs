<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Helper used to build a MessageCataloguer from xliff files
 *
 * @deprecated Please use PrestaShop\PrestaShop\Core\Translation\Provider\TranslationFinder instead
 */
class TranslationFinder
{
    /**
     * @param array $paths a list of paths when we can look for translations
     * @param string $locale the Symfony (not the PrestaShop one) locale
     * @param string|null $pattern a regular expression
     *
     * @return MessageCatalogue
     *
     * @throws FileNotFoundException
     */
    public function getCatalogueFromPaths(array $paths, string $locale, string $pattern = null): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
