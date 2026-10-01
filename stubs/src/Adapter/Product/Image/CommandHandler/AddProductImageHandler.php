<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\CommandHandler;

/**
 * Handles @see AddProductImageCommand
 */
final class AddProductImageHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler\AddProductImageHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Uploader\ProductImageUploader $productImageUploader, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Image\ProductImageFileValidator $imageValidator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\AddProductImageCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
}
