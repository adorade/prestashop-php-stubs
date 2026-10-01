<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\Update;

class ProductImageUpdater
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\Uploader\ProductImageUploader $productImageUploader
     * @param \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactoryInterface $positionUpdateFactory
     * @param \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition
     * @param \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdaterInterface $positionUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Uploader\ProductImageUploader $productImageUploader, \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactoryInterface $positionUpdateFactory, \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition, \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdaterInterface $positionUpdater, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Image\Exception\CannotDeleteProductImageException
     * @throws \PrestaShop\PrestaShop\Core\Image\Exception\CannotUnlinkImageException
     */
    public function deleteImage(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId)
    {
    }
    /**
     * @param \Image $newCover
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Image\Exception\CannotUpdateProductImageException
     */
    public function updateProductCover(\Image $newCover, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \Image $image
     * @param int $newPosition
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Image\Exception\CannotUpdateProductImageException
     */
    public function updatePosition(\Image $image, int $newPosition): void
    {
    }
}
