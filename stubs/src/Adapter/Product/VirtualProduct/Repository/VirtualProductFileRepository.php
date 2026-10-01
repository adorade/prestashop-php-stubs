<?php

namespace PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Repository;

/**
 * Provides access to VirtualProductFile data source
 * Legacy object ProductDownload is referred as VirtualProductFile in Core
 */
class VirtualProductFileRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Validate\VirtualProductFileValidator $virtualProductFileValidator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Validate\VirtualProductFileValidator $virtualProductFileValidator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId $virtualProductFileId
     *
     * @return \ProductDownload
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Exception\VirtualProductFileNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId $virtualProductFileId): \ProductDownload
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId $virtualProductFileId
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId $virtualProductFileId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \ProductDownload
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Exception\VirtualProductFileNotFoundException
     */
    public function findByProductId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): \ProductDownload
    {
    }
    /**
     * @param \ProductDownload $virtualProductFile
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Exception\CannotAddVirtualProductFileException
     */
    public function add(\ProductDownload $virtualProductFile): \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId
    {
    }
    /**
     * @param \ProductDownload $virtualProductFile
     */
    public function update(\ProductDownload $virtualProductFile): void
    {
    }
}
