<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command;

/**
 * Deletes multiple combinations
 */
class BulkDeleteCombinationCommand
{
    /**
     * @param int $productId
     * @param int[] $combinationIds
     * @param ShopConstraint $shopConstraint
     */
    public function __construct(int $productId, array $combinationIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return CombinationId[]
     */
    public function getCombinationIds(): array
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
