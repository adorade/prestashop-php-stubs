<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Query;

class GetAttachmentInformation
{
    /**
     * @param int $attachmentId
     */
    public function __construct(int $attachmentId)
    {
    }
    /**
     * @return AttachmentId
     */
    public function getAttachmentId(): \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId
    {
    }
}
