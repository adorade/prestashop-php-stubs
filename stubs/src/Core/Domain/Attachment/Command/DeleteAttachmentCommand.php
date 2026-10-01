<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Command;

/**
 * Delete attachment command is responsible for deleting Attachment
 */
class DeleteAttachmentCommand
{
    /**
     * @param int $attachmentId
     */
    public function __construct(int $attachmentId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId
     */
    public function getAttachmentId(): \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId
    {
    }
}
