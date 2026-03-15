<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\CommandHandler;

class UpdateProductImageHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler\UpdateProductImageHandlerInterface
{
    /**
     * @param ProductImageRepository $productImageRepository
     * @param ProductImageUpdater $productImageUpdater
     * @param ProductImageUploader $productImageUploader
     * @param ProductImageFileValidator $imageValidator
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
