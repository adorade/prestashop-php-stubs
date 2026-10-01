<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Attachment\CommandHandler;

/**
 * Handles @see SetAssociatedProductAttachmentsCommand using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class SetAssociatedProductAttachmentsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Attachment\CommandHandler\SetAssociatedProductAttachmentsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Update\ProductAttachmentUpdater $productUpdater
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
