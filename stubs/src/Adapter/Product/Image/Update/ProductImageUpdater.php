<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\Update;

class ProductImageUpdater
{
    /**
     * @param ProductImageUploader $productImageUploader
     * @param PositionUpdateFactoryInterface $positionUpdateFactory
     * @param PositionDefinition $positionDefinition
     * @param GridPositionUpdaterInterface $positionUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Uploader\ProductImageUploader $productImageUploader, \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactoryInterface $positionUpdateFactory, \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition, \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdaterInterface $positionUpdater, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository)
    {
    }
    /**
     * @param ImageId $imageId
     *
     * @throws CannotDeleteProductImageException
     * @throws CannotUnlinkImageException
     */
    public function deleteImage(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId)
    {
    }
    /**
     * @param Image $newCover
     *
     * @throws CannotUpdateProductImageException
     */
    public function updateProductCover(\Image $newCover, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param Image $image
     * @param int $newPosition
     *
     * @throws CannotUpdateProductImageException
     */
    public function updatePosition(\Image $image, int $newPosition): void
    {
    }
}
