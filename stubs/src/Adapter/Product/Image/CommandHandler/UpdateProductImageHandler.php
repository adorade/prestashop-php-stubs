<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class UpdateProductImageHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler\UpdateProductImageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\Update\ProductImageUpdater $productImageUpdater
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\Uploader\ProductImageUploader $productImageUploader
     * @param \PrestaShop\PrestaShop\Adapter\Image\ProductImageFileValidator $imageValidator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Update\ProductImageUpdater $productImageUpdater, \PrestaShop\PrestaShop\Adapter\Product\Image\Uploader\ProductImageUploader $productImageUploader, \PrestaShop\PrestaShop\Adapter\Image\ProductImageFileValidator $imageValidator)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\UpdateProductImageCommand $command): void
    {
    }
}
