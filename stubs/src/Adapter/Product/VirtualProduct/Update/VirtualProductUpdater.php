<?php

namespace PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Update;

/**
 * Provides update methods specific to virtual product
 * Legacy object ProductDownload is referred as VirtualProductFile in Core
 */
class VirtualProductUpdater
{
    /**
     * @param ProductRepository $productRepository
     * @param VirtualProductFileUploader $virtualProductFileUploader
     * @param VirtualProductFileRepository $virtualProductFileRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\File\Uploader\VirtualProductFileUploader $virtualProductFileUploader, \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Repository\VirtualProductFileRepository $virtualProductFileRepository)
    {
    }
    /**
     * @param VirtualProductFile $virtualProductFile
     * @param string|null $newFilePath
     */
    public function updateFile(\ProductDownload $virtualProductFile, ?string $newFilePath): void
    {
    }
    /**
     * Add virtual product file to a product
     * Legacy object ProductDownload is referred as VirtualProductFile in Core
     *
     * @param ProductId $productId
     * @param string $filePath
     * @param VirtualProductFile $virtualProductFile
     *
     * @return VirtualProductFileId
     *
     * @throws InvalidProductTypeException
     * @throws VirtualProductFileConstraintException
     */
    public function addFile(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, string $filePath, \ProductDownload $virtualProductFile): \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId
    {
    }
    /**
     * @param VirtualProductFileId $virtualProductFileId
     */
    public function deleteFile(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId $virtualProductFileId): void
    {
    }
    /**
     * @param ProductId $productId
     *
     * @throws InvalidProductTypeException
     */
    public function deleteFileForProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
}
