<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides Data for tax add/edit form
 */
final class TaxFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($taxId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
