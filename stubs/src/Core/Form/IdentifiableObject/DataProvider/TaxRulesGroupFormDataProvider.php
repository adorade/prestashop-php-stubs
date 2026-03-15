<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for search engine add/edit form.
 */
class TaxRulesGroupFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @var CommandBusInterface
     */
    protected $queryBus;
    /**
     * @param CommandBusInterface $queryBus
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
