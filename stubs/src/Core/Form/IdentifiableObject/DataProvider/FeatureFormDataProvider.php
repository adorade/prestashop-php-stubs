<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for feature forms.
 */
final class FeatureFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param bool $isMultistoreFeatureActive
     * @param array $defaultShopAssociation
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, $isMultistoreFeatureActive, array $defaultShopAssociation)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($id)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
