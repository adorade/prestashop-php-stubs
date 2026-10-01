<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for zone add/edit form.
 */
class CountryFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface
     */
    protected $queryBus;
    /**
     * @var bool
     */
    protected $multistoreEnabled;
    /**
     * @var int[]
     */
    protected $defaultShopAssociation;
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus
     * @param bool $multistoreEnabled
     * @param array $defaultShopAssociation
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, bool $multistoreEnabled, array $defaultShopAssociation)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($id): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData(): array
    {
    }
}
