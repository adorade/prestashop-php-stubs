<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Attachment\Command;

/**
 * Replaces previous product attachments association with the provided one.
 */
class SetAssociatedProductAttachmentsCommand
{
    /**
     * @param int $productId
     * @param int[] $attachmentIds
     */
    public function __construct(int $productId, array $attachmentIds)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return AttachmentId[]
     */
    public function getAttachmentIds(): array
    {
    }
}
