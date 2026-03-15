<?php

namespace PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler;

/**
 * Handles @see AddVirtualProductFileCommand using legacy object model
 *
 * Legacy object ProductDownload is referred as VirtualProductFile in Core
 */
final class AddVirtualProductFileHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\CommandHandler\AddVirtualProductFileHandlerInterface
{
    /**
     * @param VirtualProductUpdater $virtualProductUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Update\VirtualProductUpdater $virtualProductUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command\AddVirtualProductFileCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId
    {
    }
}
