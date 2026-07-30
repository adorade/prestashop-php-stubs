<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for zone add/edit form.
 */
final class ZoneFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param bool $multistoreEnabled
     * @param array $defaultShopAssociation
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, bool $multistoreEnabled, array $defaultShopAssociation)
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
