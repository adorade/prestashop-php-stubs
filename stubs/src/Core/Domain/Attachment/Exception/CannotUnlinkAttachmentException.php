<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Exception;

/**
 * Thrown when file unlink fails
 */
class CannotUnlinkAttachmentException extends \PrestaShop\PrestaShop\Core\File\Exception\CannotUnlinkFileException
{
    /**
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = 0, \Throwable $previous = null, string $filePath = '')
    {
    }
    public function getFilePath(): string
    {
    }
}
