<?php

namespace PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler;

/**
 * Deletes virtual product file using legacy object model
 */
class DeleteVirtualProductFileHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\CommandHandler\DeleteVirtualProductFileHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command\DeleteVirtualProductFileCommand $command): void
    {
    }
}
