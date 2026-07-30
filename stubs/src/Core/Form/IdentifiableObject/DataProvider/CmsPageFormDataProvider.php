<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * {@inheritdoc}
 */
class CmsPageFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
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
     * @throws CmsPageException
     */
    public function getData($cmsPageId)
    {
    }
    /**
     * Get default form data.
     *
     * @return mixed
     */
    public function getDefaultData()
    {
    }
}
