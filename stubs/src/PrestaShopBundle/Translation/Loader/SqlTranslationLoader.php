<?php

namespace PrestaShopBundle\Translation\Loader;

class SqlTranslationLoader implements \Symfony\Component\Translation\Loader\LoaderInterface
{
    /**
     * @var Theme the theme
     */
    protected $theme;
    /**
     * @param Theme $theme the theme
     *
     * @return $this
     */
    public function setTheme(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function load($resource, $locale, $domain = 'messages')
    {
    }
    /**
     * @param array $translations the list of translations
     * @param MessageCatalogueInterface $catalogue the Message Catalogue
     */
    protected function addTranslationsToCatalogue(array $translations, \Symfony\Component\Translation\MessageCatalogueInterface $catalogue)
    {
    }
}
