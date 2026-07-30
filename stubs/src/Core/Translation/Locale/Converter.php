<?php

namespace PrestaShop\PrestaShop\Core\Translation\Locale;

/**
 * Helper to manipulate the locales (IETF language tag) specific to PrestaShop
 *
 * @doc https://en.wikipedia.org/wiki/IETF_language_tag#Syntax_of_language_tags
 */
final class Converter
{
    /**
     * @param string $translationsMappingFile
     */
    public function __construct(string $translationsMappingFile)
    {
    }
    /**
     * @param string $locale the locale (like "fr-FR")
     *
     * @return string|bool the legacy PrestaShop locale (like "fr")
     *
     * @throws Exception
     */
    public function toLegacyLocale(string $locale)
    {
    }
    /**
     * @param string $legacyLocale the legacy PrestaShop locale
     *
     * @return string|bool the locale
     *
     * @throws Exception
     */
    public function toLanguageTag(string $legacyLocale)
    {
    }
    /**
     * Get the PrestaShop locale from real locale (like "fr-FR")
     *
     * @param string $locale
     *
     * @return string The PrestaShop locale (like "fr_FR")
     */
    public static function toPrestaShopLocale(string $locale): string
    {
    }
}
