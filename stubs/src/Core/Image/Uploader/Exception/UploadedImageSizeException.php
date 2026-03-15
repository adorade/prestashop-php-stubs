<?php

namespace PrestaShop\PrestaShop\Core\Image\Uploader\Exception;

class UploadedImageSizeException extends \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\ImageUploadException
{
    /**
     * @param int $allowedSizeBytes
     * @param string|null $message
     * @param int $code
     * @param Throwable|null $previous
     *
     * @return self
     */
    public static function build(int $allowedSizeBytes, string $message = null, int $code = 0, \Throwable $previous = null): self
    {
    }
    /**
     * @return int
     */
    public function getAllowedSizeBytes(): int
    {
    }
}
