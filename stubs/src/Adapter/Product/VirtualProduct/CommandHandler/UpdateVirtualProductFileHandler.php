<?php

namespace PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler;

/**
 * Updates VirtualProductFile using legacy object model. (ProductDownload is referenced as VirtualProduct in core)
 */
final class UpdateVirtualProductFileHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\CommandHandler\UpdateVirtualProductFileHandlerInterface
{
    /**
     * @param VirtualProductUpdater $virtualProductUpdater
     * @param VirtualProductFileRepository $virtualProductFileRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Update\VirtualProductUpdater $virtualProductUpdater, \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Repository\VirtualProductFileRepository $virtualProductFileRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command\UpdateVirtualProductFileCommand $command): void
    {
    }
}
