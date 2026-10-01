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
     * @param array $translations the list of translations
     * @param \Symfony\Component\Translation\MessageCatalogueInterface $catalogue the Message Catalogue
     */
    protected function addTranslationsToCatalogue(array $translations, \Symfony\Component\Translation\MessageCatalogueInterface $catalogue)
    {
    }
}
