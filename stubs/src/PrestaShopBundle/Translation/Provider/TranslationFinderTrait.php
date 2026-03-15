<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Helper used to retrieve a Symfony Catalogue object.
 *
 * @deprecated use TraslationFinder instead
 */
trait TranslationFinderTrait
{
    /**
     * @param array $paths a list of paths when we can look for translations
     * @param string $locale the Symfony (not the PrestaShop one) locale
     * @param string|null $pattern a regular expression
     *
     * @return MessageCatalogue
     *
     * @throws FileNotFoundException
     *
     * @deprecated use TraslationFinder::getCatalogueFromPaths() instead
     */
    public function getCatalogueFromPaths($paths, $locale, $pattern = null)
    {
    }
}
