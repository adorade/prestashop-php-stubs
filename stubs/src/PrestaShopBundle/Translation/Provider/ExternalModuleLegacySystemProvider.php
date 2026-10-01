<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Be able to retrieve information from legacy translation files
 */
class ExternalModuleLegacySystemProvider extends \PrestaShopBundle\Translation\Provider\AbstractProvider implements \PrestaShopBundle\Translation\Provider\UseDefaultCatalogueInterface, \PrestaShopBundle\Translation\Provider\SearchProviderInterface, \PrestaShopBundle\Translation\Provider\UseModuleInterface
{
    public function __construct(\Symfony\Component\Translation\Loader\LoaderInterface $databaseLoader, $resourceDirectory, \Symfony\Component\Translation\Loader\LoaderInterface $legacyFileLoader, \PrestaShopBundle\Translation\Extractor\LegacyModuleExtractorInterface $legacyModuleExtractor, \PrestaShopBundle\Translation\Provider\ModuleProvider $moduleProvider)
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
    public function getTranslationDomains()
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
     * @param string $domain
     *
     * @return AbstractProvider|SearchProviderInterface|void
     */
    public function setDomain($domain)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultCatalogue($empty = true)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getXliffCatalogue()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultResourceDirectory()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getResourceDirectory()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getMessageCatalogue()
    {
    }
}
