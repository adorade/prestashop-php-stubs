<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\Update;

/**
 * Updates settings related to Product stock
 */
class ProductStockUpdater
{
    public function __construct(\PrestaShop\PrestaShop\Core\Stock\StockManager $stockManager, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\MovementReasonRepository $movementReasonRepository, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager)
    {
    }
    /**
     * @param ProductId $productId
     * @param ProductStockProperties $properties
     */
    public function update(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Adapter\Product\Stock\Update\ProductStockProperties $properties, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * Resets product stock to zero, both Product and associated StockAvailable are reset, and a stock movement linked to
     * the employee from context is generated.
     *
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     *
     * @throws CoreException
     * @throws ProductStockException
     */
    public function resetStock(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
