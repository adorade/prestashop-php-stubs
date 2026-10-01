<?php

namespace PrestaShopBundle\Translation\Provider;

/**
 * Able to search translations for a specific translation domains across multiple sources
 */
class SearchProvider extends \PrestaShopBundle\Translation\Provider\AbstractProvider implements \PrestaShopBundle\Translation\Provider\UseDefaultCatalogueInterface, \PrestaShopBundle\Translation\Provider\UseModuleInterface
{
    public function __construct(\Symfony\Component\Translation\Loader\LoaderInterface $databaseLoader, \PrestaShopBundle\Translation\Provider\ExternalModuleLegacySystemProvider $externalModuleLegacySystemProvider, $resourceDirectory)
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
    public function getDefaultCatalogue($empty = true)
    {
    }
    /**
     * @return \Symfony\Component\Translation\MessageCatalogue|\Symfony\Component\Translation\MessageCatalogueInterface
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\FileNotFoundException
     */
    public function getXliffCatalogue()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setLocale($locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setModuleName($moduleName)
    {
    }
}
