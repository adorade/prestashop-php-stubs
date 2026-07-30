<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides the data that is used to prefill the Product image form
 */
class ProductImageFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, int $contextShopId)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getData($id)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getDefaultData()
    {
    }
}
