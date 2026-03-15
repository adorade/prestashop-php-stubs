<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This class will update/insert/delete data from DB / ORM about Product, for both Front and Admin interfaces.
 */
class AdminProductDataUpdater implements \PrestaShopBundle\Service\DataUpdater\Admin\ProductInterface
{
    /**
     * Constructor. HookDispatcher is injected by Sf container.
     *
     * @param HookDispatcherInterface $hookDispatcher
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function activateProductIdList(array $productListId, $activate = true)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function deleteProductIdList(array $productIdList)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function duplicateProductIdList(array $productIdList)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function deleteProduct($productId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function duplicateProduct($productId, $namePattern = 'copy of %s')
    {
    }
    /**
     * {@inheritdoc}
     */
    public function sortProductIdList(array $productList, $filterParams)
    {
    }
}
