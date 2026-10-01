<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Deletes multiple products
 */
class BulkDuplicateProductCommand
{
    /**
     * @param int[] $productIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     */
    public function __construct(array $productIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId[]
     */
    public function getProductIds(): array
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
