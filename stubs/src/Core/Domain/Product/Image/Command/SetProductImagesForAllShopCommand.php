<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Command;

class SetProductImagesForAllShopCommand
{
    /**
     * @param int $productId
     */
    public function __construct(int $productId)
    {
    }
    public function addProductSetting(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\ProductImageSetting $productImageSetting): self
    {
    }
    /**
     * @return ProductImageSetting[]
     */
    public function getProductImageSettings(): array
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
