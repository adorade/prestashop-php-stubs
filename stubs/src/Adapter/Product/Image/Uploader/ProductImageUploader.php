<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\Uploader;

/**
 * Uploads product image to filesystem
 */
class ProductImageUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader
{
    /**
     * @param ProductImagePathFactory $productImagePathFactory
     * @param int $contextShopId
     * @param ImageGenerator $imageGenerator
     * @param HookDispatcherInterface $hookDispatcher
     * @param ProductImageRepository $productImageRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory, int $contextShopId, \PrestaShop\PrestaShop\Adapter\Image\ImageGenerator $imageGenerator, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository)
    {
    }
    /**
     * @param Image $image
     * @param string $filePath
     *
     * @return string destination path of main image
     *
     * @throws CannotUnlinkImageException
     * @throws ImageUploadException
     * @throws ImageOptimizationException
     * @throws MemoryLimitException
     */
    public function upload(\Image $image, string $filePath): string
    {
    }
    /**
     * @param Image $image
     *
     * @throws CannotUnlinkImageException
     */
    public function remove(\Image $image): void
    {
    }
}
