<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for manufacturers add/edit forms
 */
final class ManufacturerFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $bus
     * @param bool $multistoreEnabled
     * @param int[] $defaultShopAssociation
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus, $multistoreEnabled, array $defaultShopAssociation)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($manufacturerId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
