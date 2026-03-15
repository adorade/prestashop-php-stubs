<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\CommandHandler;

/**
 * Defines contract to handle @see AddVirtualProductFileCommand
 */
interface AddVirtualProductFileHandlerInterface
{
    /**
     * @param AddVirtualProductFileCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command\AddVirtualProductFileCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\ValueObject\VirtualProductFileId;
}
