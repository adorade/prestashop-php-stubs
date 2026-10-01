<?php

namespace PrestaShopBundle\Translation\Loader;

class SqlTranslationLoader implements \Symfony\Component\Translation\Loader\LoaderInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Addon\Theme\Theme the theme
     */
    protected $theme;
    /**
     * @param \PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme the theme
     *
     * @return $this
     */
    public function setTheme(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function load($resource, $locale, $domain = 'messages'): \Symfony\Component\Translation\MessageCatalogue
    {
    }
    /**
     * Builds the WHERE sub-condition that restricts which ps_translation rows are loaded.
     *
     * Always covers both core rows (theme IS NULL) and theme-specific rows for every
     * active shop. This is required because in PS9 the Symfony container is always active,
     * so getTranslator() never calls TranslatorLanguageLoader::loadLanguage() and setTheme()
     * is never invoked. A single loader instance must therefore handle both row types.
     *
     * In the PS8 legacy path, TranslatorLanguageLoader registers two separate instances
     * (a plain 'db' loader and a 'db.theme' loader with setTheme() called). With the
     * unified condition both instances load the same rows; the second pass is redundant
     * but harmless.
     *
     * ORDER BY theme IS NOT NULL in the caller ensures theme=NULL rows are processed first
     * inside addTranslationsToCatalogue(), so shop-specific overrides win on duplicate keys.
     *
     * The correct column is ps_shop.theme_name — ps_shop.theme has never existed; referencing
     * it causes MySQL/MariaDB to silently return an empty result set (issue #41232, Bug A).
     */
    protected function buildThemeCondition(): string
    {
    }
    /**
     * @param array $translations the list of translations
     * @param \Symfony\Component\Translation\MessageCatalogueInterface $catalogue the Message Catalogue
     */
    protected function addTranslationsToCatalogue(array $translations, \Symfony\Component\Translation\MessageCatalogueInterface $catalogue)
    {
    }
}
