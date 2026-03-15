<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for suppliers add/edit forms
 */
final class SupplierFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param bool $multistoreEnabled
     * @param int[] $defaultShopAssociation
     * @param int $contextCountryId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, $multistoreEnabled, array $defaultShopAssociation, $contextCountryId)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws SupplierException
     */
    public function getData($supplierId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
