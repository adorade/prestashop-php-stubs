<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Attachment\CommandHandler;

/**
 * Removes all product-attachment associations for given product
 */
final class RemoveAllAssociatedProductAttachmentsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Attachment\CommandHandler\RemoveAllAssociatedProductAttachmentsHandlerInterface
{
    /**
     * @param ProductAttachmentUpdater $productAttachmentUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductAttachmentUpdater $productAttachmentUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Attachment\Command\RemoveAllAssociatedProductAttachmentsCommand $command): void
    {
    }
}
