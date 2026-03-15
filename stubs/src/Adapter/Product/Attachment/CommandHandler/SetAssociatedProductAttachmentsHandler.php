<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Attachment\CommandHandler;

/**
 * Handles @see SetAssociatedProductAttachmentsCommand using legacy object model
 */
final class SetAssociatedProductAttachmentsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Attachment\CommandHandler\SetAssociatedProductAttachmentsHandlerInterface
{
    /**
     * @param ProductAttachmentUpdater $productUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductAttachmentUpdater $productUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Attachment\Command\SetAssociatedProductAttachmentsCommand $command): void
    {
    }
}
