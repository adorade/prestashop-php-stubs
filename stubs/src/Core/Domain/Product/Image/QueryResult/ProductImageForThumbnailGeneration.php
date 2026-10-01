<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult;

/**
 * Represents product image data with only the essential information needed for bulk thumbnail operations.
 */
class ProductImageForThumbnailGeneration
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, private readonly \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId)
    {
    }
    public function getImageId(): \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
