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
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId[]
     */
    public function getAttachmentIds(): array
    {
    }
}
