<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Provider;

interface ProductImageProviderInterface
{
    /**
     * @param ProductId $productId
     * @param ShopId $shopId
     *
     * @return string
     *
     * @throws ShopAssociationNotFound
     */
    public function getProductCoverUrl(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): string;
    /**
     * @param CombinationId $combinationId
     * @param ShopId $shopId
     *
     * @return string
     *
     * @throws ShopAssociationNotFound
     */
    public function getCombinationCoverUrl(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): string;
}
