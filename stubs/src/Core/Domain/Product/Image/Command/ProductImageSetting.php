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
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
     */
    public function getImageId(): \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getShopIds(): array
    {
    }
}
