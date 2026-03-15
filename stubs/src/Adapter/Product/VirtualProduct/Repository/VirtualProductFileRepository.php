<?php

namespace PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Repository;

/**
 * Provides access to VirtualProductFile data source
 * Legacy object ProductDownload is referred as VirtualProductFile in Core
 */
class VirtualProductFileRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param VirtualProductFileValidator $virtualProductFileValidator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Validate\VirtualProductFileValidator $virtualProductFileValidator)
    {
    }
    /**
     * @param VirtualProductFileId $virtualProductFileId
     *
     * @return VirtualProductFile
     *
     * @throws VirtualProductFileNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId $virtualProductFileId): \ProductDownload
    {
    }
    /**
     * @param VirtualProductFileId $virtualProductFileId
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId $virtualProductFileId): void
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return VirtualProductFile
     *
     * @throws VirtualProductFileNotFoundException
     */
    public function findByProductId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): \ProductDownload
    {
    }
    /**
     * @param VirtualProductFile $virtualProductFile
     *
     * @return VirtualProductFileId
     *
     * @throws CannotAddVirtualProductFileException
     */
    public function add(\ProductDownload $virtualProductFile): \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId
    {
    }
    /**
     * @param VirtualProductFile $virtualProductFile
     */
    public function update(\ProductDownload $virtualProductFile): void
    {
    }
}
