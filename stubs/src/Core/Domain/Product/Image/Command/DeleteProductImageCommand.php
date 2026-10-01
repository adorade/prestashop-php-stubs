<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Command;

/**
 * Deletes product image
 */
class DeleteProductImageCommand
{
    /**
     * @param int $imageId
     */
    public function __construct(int $imageId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
     */
    public function getImageId(): \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
}
