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
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     */
    public function __construct(int $productId, array $combinationIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId[]
     */
    public function getCombinationIds(): array
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
