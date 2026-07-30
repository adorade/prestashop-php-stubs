<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Data provider for new Architecture, about Product stocks.
 *
 * This class will provide data from DB / ORM about Product stocks.
 */
class StockManager implements \PrestaShopBundle\Service\DataProvider\StockInterface
{
    /**
     * Gets available stock for a given product / combination / shop.
     *
     * @param object $product
     * @param null $id_product_attribute
     * @param int|null $id_shop
     *
     * @return StockAvailable
     */
    public function getStockAvailableByProduct($product, $id_product_attribute = null, $id_shop = null)
    {
    }
    /**
     * Returns True if Stocks are managed by a module (or by legacy ASM).
     *
     * @return bool True if Stocks are managed by a module (or by legacy ASM)
     */
    public function isAsmGloballyActivated()
    {
    }
    /**
     * @param int $shopId
     * @param int $errorState
     * @param int $cancellationState
     * @param int|null $idProduct
     * @param int|null $idOrder
     *
     * @return bool
     */
    public function updatePhysicalProductQuantity($shopId, $errorState, $cancellationState, $idProduct = null, $idOrder = null)
    {
    }
    /**
     * Instance a new StockAvailable.
     *
     * @param bool|int|null $stockAvailableId
     *
     * @return StockAvailable
     */
    public function newStockAvailable($stockAvailableId = null)
    {
    }
    /**
     * Use legacy getStockAvailableIdByProductId.
     *
     * @param int $productId
     * @param int|null $productAttributeId
     * @param int|null $shopId
     *
     * @return bool|int
     */
    public function getStockAvailableIdByProductId($productId, $productAttributeId = null, $shopId = null)
    {
    }
    /**
     * For a given product, get its "out of stock" flag.
     *
     * @param int $productId
     * @param int $shopId Optional : gets context if null @see Context::getContext()
     *
     * @return bool : depends on stock @see $depends_on_stock
     */
    public function outOfStock($productId, $shopId = null)
    {
    }
}
