<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Query;

/**
 * Gets attachment information for editing.
 */
class GetAttachmentForEditing
{
    /**
     * @param int $attachmentIdValue
     *
     * @throws AttachmentConstraintException
     */
    public function __construct(int $attachmentIdValue)
    {
    }
    /**
     * @return AttachmentId
     */
    public function getAttachmentId(): \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId
    {
    }
}
