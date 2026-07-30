<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Deletes multiple products
 */
class BulkUpdateProductStatusCommand
{
    /**
     * @param int[] $productIds
     *
     * @throws ProductConstraintException
     */
    public function __construct(array $productIds, bool $newStatus, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId[]
     */
    public function getProductIds(): array
    {
    }
    /**
     * @return bool
     */
    public function getNewStatus(): bool
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
