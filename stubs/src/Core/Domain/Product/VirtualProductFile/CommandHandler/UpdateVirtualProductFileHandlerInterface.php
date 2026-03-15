<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\CommandHandler;

/**
 * Defines contract to handle @see UpdateVirtualProductFileCommand
 */
interface UpdateVirtualProductFileHandlerInterface
{
    /**
     * @param UpdateVirtualProductFileCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command\UpdateVirtualProductFileCommand $command): void;
}
