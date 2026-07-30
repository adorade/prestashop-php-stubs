<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Translation provider for a specific native module (maintained by the core team)
 * Used mainly for the display in the Translations Manager of the Back Office.
 */
class ModuleProvider extends \PrestaShopBundle\Translation\Provider\AbstractProvider implements \PrestaShopBundle\Translation\Provider\SearchProviderInterface, \PrestaShopBundle\Translation\Provider\UseModuleInterface
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
    public function setModuleName($moduleName)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultResourceDirectory()
    {
    }
}
