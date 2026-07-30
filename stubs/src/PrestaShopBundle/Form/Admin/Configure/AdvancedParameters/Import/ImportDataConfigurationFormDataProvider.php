<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import;

/**
 * Class ImportDataConfigurationFormDataProvider is responsible for providing Import's 2nd step form data.
 */
final class ImportDataConfigurationFormDataProvider implements \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormDataProviderInterface
{
    /**
     * @param ImportDirectory $importDirectory
     * @param DataRowCollectionFactoryInterface $dataRowCollectionFactory
     * @param ImportMatchRepository $importMatchRepository
     * @param DataMatchSaver $dataMatchSaver
     * @param array $entityFieldChoices
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Import\ImportDirectory $importDirectory, \PrestaShop\PrestaShop\Core\Import\File\DataRow\Factory\DataRowCollectionFactoryInterface $dataRowCollectionFactory, \PrestaShopBundle\Entity\Repository\ImportMatchRepository $importMatchRepository, \PrestaShop\PrestaShop\Adapter\Import\DataMatchSaver $dataMatchSaver, array $entityFieldChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
    }
}
