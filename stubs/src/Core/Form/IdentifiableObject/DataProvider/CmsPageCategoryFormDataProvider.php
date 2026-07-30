<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

final class CmsPageCategoryFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param array $contextShopIds
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, array $contextShopIds)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageCategoryException
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
