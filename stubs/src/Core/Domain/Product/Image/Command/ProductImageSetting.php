<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Command;

class ProductImageSetting
{
    /**
     * @param int $productImageId
     * @param int[] $shopIds
     */
    public function __construct(int $productImageId, array $shopIds)
    {
    }
    /**
     * @return ImageId
     */
    public function getImageId(): \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    /**
     * @return ShopId[]
     */
    public function getShopIds(): array
    {
    }
}
