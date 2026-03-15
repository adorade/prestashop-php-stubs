<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\CommandHandler;

/**
 * Defines contract to handle @see DeleteVirtualProductFileCommand
 */
interface DeleteVirtualProductFileHandlerInterface
{
    /**
     * @param DeleteVirtualProductFileCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command\DeleteVirtualProductFileCommand $command): void;
}
