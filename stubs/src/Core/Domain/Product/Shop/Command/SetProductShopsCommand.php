<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Shop\Command;

class SetProductShopsCommand
{
    /**
     * @param int $productId the product for which the new shop association is being set
     * @param int $sourceShopId the source shop used as a reference for copy when a new shop association is being created
     * @param int[] $shopIds ids of all the associated shops for this product,
     *                       any shop which is not present in this list - will be unassociated,
     *                       any shop not yet associated - will induce a new shop association creation
     */
    public function __construct(int $productId, int $sourceShopId, array $shopIds)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return ShopId
     */
    public function getSourceShopId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @return ShopId[]
     */
    public function getShopIds(): array
    {
    }
}
