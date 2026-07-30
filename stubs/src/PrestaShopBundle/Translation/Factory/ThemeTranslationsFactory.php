<?php

namespace PrestaShopBundle\Translation\Factory;

/**
 * This class returns a collection of translations, using locale and identifier.
 *
 * But in this particular case, the identifier is the theme name.
 *
 * Returns MessageCatalogue object or Translation tree array.
 */
class ThemeTranslationsFactory extends \PrestaShopBundle\Translation\Factory\TranslationsFactory
{
    public function __construct(\PrestaShopBundle\Translation\Provider\ThemeProvider $themeProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function createCatalogue($themeName, $locale = 'en_US')
    {
    }
    /**
     * {@inheritdoc}
     */
    public function createTranslationsArray($themeName, $locale = 'en_US', $theme = null, $search = null)
    {
    }
    /**
     * @param string $locale the catalogue locale
     * @param string $domain the catalogue domain
     *
     * @return string
     */
    protected function removeLocaleFromDomain($locale, $domain)
    {
    }
    /**
     * @param string $themeName the theme name
     * @param string $locale the catalogue locale
     * @param string|null $search
     *
     * @throws ProviderNotFoundException
     *
     * @return array
     */
    protected function getFrontTranslationsForThemeAndLocale($themeName, $locale, $search = null)
    {
    }
}
