<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Command;

/**
 * Bulk delete attachment command is responsible for deleting Attachment
 */
class BulkDeleteAttachmentsCommand
{
    /**
     * @param int[] $attachmentIds
     */
    public function __construct(array $attachmentIds)
    {
    }
    /**
     * @return AttachmentId[]
     */
    public function getAttachmentIds(): array
    {
    }
}
