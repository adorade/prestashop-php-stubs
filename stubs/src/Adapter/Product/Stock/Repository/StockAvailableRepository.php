<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\Repository;

class StockAvailableRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Stock\Validate\StockAvailableValidator $stockAvailableValidator, \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository $shopGroupRepository)
    {
    }
    /**
     * @param StockAvailable $stockAvailable
     *
     * @throws CoreException
     */
    public function update(\StockAvailable $stockAvailable, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    /**
     * When group shares its stock, StockAvailable id_shop value is 0, but sometimes we still need a fallback shop
     * ID (because some code only accepts this as input even if they later update the group), so we return the first
     * shop ID from the StockAvailable group.
     *
     * @param StockAvailable $stockAvailable
     *
     * @return ShopId
     */
    public function getFallbackShopId(\StockAvailable $stockAvailable): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @param StockId $stockId
     *
     * @return StockAvailable
     *
     * @throws CoreException
     * @throws StockAvailableNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId): \StockAvailable
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopId $shopId
     *
     * @return StockId
     *
     * @throws StockAvailableNotFoundException
     */
    public function getStockIdByProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopId $shopId
     *
     * @return StockAvailable
     *
     * @throws CoreException
     * @throws StockAvailableNotFoundException
     */
    public function getForProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \StockAvailable
    {
    }
    /**
     * @param ProductId $productId
     *
     * @throws CoreException
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    /**
     * @param CombinationId $combinationId
     * @param ShopId $shopId
     *
     * @return StockId
     *
     * @throws CoreException
     * @throws StockAvailableNotFoundException
     */
    public function getStockIdByCombination(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId
    {
    }
    /**
     * @param CombinationId $combinationId
     *
     * @return StockAvailable
     *
     * @throws CoreException
     * @throws StockAvailableNotFoundException
     */
    public function getForCombination(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \StockAvailable
    {
    }
    /**
     * @param ProductId $productId
     * @param CombinationId|null $combinationId
     *
     * @return StockAvailable
     *
     * @throws CoreException
     * @throws StockAvailableNotFoundException
     */
    public function createStockAvailable(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId = null): \StockAvailable
    {
    }
    /**
     * @param ProductId $productId
     * @param CombinationIdInterface $combinationId
     *
     * @return StockId[]
     */
    public function getAllShopsStockIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface $combinationId): array
    {
    }
    /**
     * Updates the physical_quantity and reserved_quantity columns for the specified Stock. Most of this function logic comes from
     * StockManager::updatePhysicalProductQuantity
     *
     * @param StockId $stockId
     * @param OrderStateId $errorStateId
     * @param OrderStateId $canceledStateId
     */
    public function updatePhysicalProductQuantity(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId, \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $errorStateId, \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $canceledStateId): void
    {
    }
    protected function updateReservedProductQuantity(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockId $stockId, \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $errorStateId, \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $canceledStateId): void
    {
    }
}
