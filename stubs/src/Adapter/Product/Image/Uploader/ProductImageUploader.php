<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\Uploader;

/**
 * Uploads product image to filesystem
 */
class ProductImageUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory
     * @param int $contextShopId
     * @param \PrestaShop\PrestaShop\Adapter\Image\ImageGenerator $imageGenerator
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory, int $contextShopId, \PrestaShop\PrestaShop\Adapter\Image\ImageGenerator $imageGenerator, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository)
    {
    }
    /**
     * @param \Image $image
     * @param string $filePath
     *
     * @return string destination path of main image
     *
     * @throws \PrestaShop\PrestaShop\Core\Image\Exception\CannotUnlinkImageException
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\ImageUploadException
     * @throws \PrestaShop\PrestaShop\Core\Image\Exception\ImageOptimizationException
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\MemoryLimitException
     */
    public function upload(\Image $image, string $filePath): string
    {
    }
    /**
     * @param \Image $image
     *
     * @throws \PrestaShop\PrestaShop\Core\Image\Exception\CannotUnlinkImageException
     */
    public function remove(\Image $image): void
    {
    }
}
