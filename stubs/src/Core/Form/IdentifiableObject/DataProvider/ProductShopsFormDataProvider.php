<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for the product shop selection form, mostly which shops are associated to the product
 * and which one is the current selected shop.
 */
class ProductShopsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param ProductRepository $productRepository
     * @param int|null $contextShopId
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, ?int $contextShopId)
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
