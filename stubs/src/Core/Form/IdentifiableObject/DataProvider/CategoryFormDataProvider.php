<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for category add/edit category forms
 */
final class CategoryFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param int $contextShopId
     * @param int $contextShopRootCategoryId
     * @param GroupDataProvider $groupDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, $contextShopId, $contextShopRootCategoryId, \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider $groupDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($categoryId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
