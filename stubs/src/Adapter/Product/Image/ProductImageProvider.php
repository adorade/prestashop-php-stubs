<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image;

class ProductImageProvider implements \PrestaShop\PrestaShop\Core\Domain\Product\Image\Provider\ProductImageProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory)
    {
    }
    public function getProductCoverUrl(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): string
    {
    }
    public function getCombinationCoverUrl(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): string
    {
    }
}
