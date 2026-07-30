<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Translations provider for keys not yet put in the right domain.
 * Equivalent to so-called main "messages" domain in the Symfony ecosystem.
 */
class OthersProvider extends \PrestaShopBundle\Translation\Provider\AbstractProvider implements \PrestaShopBundle\Translation\Provider\UseDefaultCatalogueInterface
{
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
     * {@inheritdoc}
     */
    public function getDefaultResourceDirectory()
    {
    }
}
