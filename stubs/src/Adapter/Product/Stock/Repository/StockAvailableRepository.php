<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\Repository;

class StockAvailableRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Stock\Validate\StockAvailableValidator $stockAvailableValidator, \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository $shopGroupRepository)
    {
    }
    /**
     * @param \StockAvailable $stockAvailable
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function update(\StockAvailable $stockAvailable, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    /**
     * When group shares its stock, StockAvailable id_shop value is 0, but sometimes we still need a fallback shop
     * ID (because some code only accepts this as input even if they later update the group), so we return the first
     * shop ID from the StockAvailable group.
     *
     * @param \StockAvailable $stockAvailable
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
     */
    public function getFallbackShopId(\StockAvailable $stockAvailable): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId
     *
     * @return \StockAvailable
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\StockAvailableNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId): \StockAvailable
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\StockAvailableNotFoundException
     */
    public function getStockIdByProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \StockAvailable
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\StockAvailableNotFoundException
     */
    public function getForProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \StockAvailable
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\StockAvailableNotFoundException
     */
    public function getStockIdByCombination(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     *
     * @return \StockAvailable
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\StockAvailableNotFoundException
     */
    public function getForCombination(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \StockAvailable
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId|null $combinationId
     *
     * @return \StockAvailable
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\StockAvailableNotFoundException
     */
    public function createStockAvailable(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId = null): \StockAvailable
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface $combinationId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId[]
     */
    public function getAllShopsStockIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface $combinationId): array
    {
    }
    /**
     * Updates the physical_quantity and reserved_quantity columns for the specified Stock. Most of this function logic comes from
     * StockManager::updatePhysicalProductQuantity
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $errorStateId
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $canceledStateId
     */
    public function updatePhysicalProductQuantity(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId, \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $errorStateId, \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $canceledStateId): void
    {
    }
    protected function updateReservedProductQuantity(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId, \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $errorStateId, \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $canceledStateId): void
    {
    }
}
