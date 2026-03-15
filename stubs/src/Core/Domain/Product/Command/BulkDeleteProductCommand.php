<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Deletes multiple products
 */
class BulkDeleteProductCommand
{
    /**
     * @param int[] $productIds
     *
     * @throws ProductConstraintException
     */
    public function __construct(array $productIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId[]
     */
    public function getProductIds(): array
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
