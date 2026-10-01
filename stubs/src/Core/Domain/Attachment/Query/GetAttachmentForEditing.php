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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentConstraintException
     */
    public function __construct(int $attachmentIdValue)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId
     */
    public function getAttachmentId(): \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId
    {
    }
}
