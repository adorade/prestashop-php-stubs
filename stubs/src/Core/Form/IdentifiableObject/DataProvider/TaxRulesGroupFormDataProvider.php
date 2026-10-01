<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for search engine add/edit form.
 */
class TaxRulesGroupFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface
     */
    protected $queryBus;
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($id): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData(): array
    {
    }
}
