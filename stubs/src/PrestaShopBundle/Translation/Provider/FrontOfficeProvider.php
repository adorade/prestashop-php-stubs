<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Main translation provider for the Front Office
 */
class FrontOfficeProvider extends \PrestaShopBundle\Translation\Provider\AbstractProvider implements \PrestaShopBundle\Translation\Provider\UseDefaultCatalogueInterface
{
    public const DEFAULT_THEME_NAME = 'classic';
    /**
     * {@inheritdoc}
     */
    public function getTranslationDomains()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIdentifier()
    {
    }
    /**
     * @param null $themeName
     *
     * @return MessageCatalogue
     */
    public function getDatabaseCatalogue($themeName = null)
    {
    }
    /**{@inheritdoc}
     */
    public function getDefaultResourceDirectory()
    {
    }
}
