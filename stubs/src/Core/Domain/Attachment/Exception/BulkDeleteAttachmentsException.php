<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Exception;

/**
 * Exception is thrown on attachments bulk delete failure
 */
class BulkDeleteAttachmentsException extends \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentException
{
    /**
     * @param int[] $attachmentIds
     * @param string $message
     * @param int $code
     * @param Exception $previous
     */
    public function __construct(array $attachmentIds, $message = '', $code = 0, ?\Exception $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getAttachmentIds(): array
    {
    }
}
