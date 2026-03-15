<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Attachment\CommandHandler;

/**
 * Defines contract to handle @see SetAssociatedProductAttachmentsCommand
 */
interface SetAssociatedProductAttachmentsHandlerInterface
{
    /**
     * @param SetAssociatedProductAttachmentsCommand $command
     *
     * @return void
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Attachment\Command\SetAssociatedProductAttachmentsCommand $command): void;
}
