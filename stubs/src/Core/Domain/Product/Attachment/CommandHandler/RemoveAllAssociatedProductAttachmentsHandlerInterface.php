<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Attachment\CommandHandler;

/**
 * Defines contract to handle @see RemoveAllAssociatedProductAttachmentsCommand
 */
interface RemoveAllAssociatedProductAttachmentsHandlerInterface
{
    /**
     * @param RemoveAllAssociatedProductAttachmentsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Attachment\Command\RemoveAllAssociatedProductAttachmentsCommand $command): void;
}
