<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for customer forms
 */
final class CustomerFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param ConfigurationInterface $configuration
     * @param DefaultGroupsProviderInterface $defaultGroupsProvider
     * @param bool $isB2bFeatureEnabled
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroupsProviderInterface $defaultGroupsProvider, $isB2bFeatureEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($customerId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
