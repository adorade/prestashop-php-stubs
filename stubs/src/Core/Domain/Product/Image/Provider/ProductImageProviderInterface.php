<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Provider;

interface ProductImageProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return string
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound
     */
    public function getProductCoverUrl(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): string;
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return string
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound
     */
    public function getCombinationCoverUrl(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): string;
}
