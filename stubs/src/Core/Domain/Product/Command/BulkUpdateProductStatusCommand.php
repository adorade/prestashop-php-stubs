<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Updates status of multiple products
 */
class BulkUpdateProductStatusCommand
{
    /**
     * @param int[] $productIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     */
    public function __construct(array $productIds, bool $newStatus, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId[]
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
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
