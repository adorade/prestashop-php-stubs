<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult;

class AttachmentInformation
{
    /**
     * @param int $attachmentId
     * @param array $localizedNames
     * @param array $localizedDescriptions
     * @param string $fileName
     * @param string $mimeType
     * @param int $fileSize
     */
    public function __construct(int $attachmentId, array $localizedNames, array $localizedDescriptions, string $fileName, string $mimeType, int $fileSize)
    {
    }
    /**
     * @return int
     */
    public function getAttachmentId(): int
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDescriptions(): array
    {
    }
    /**
     * @return string
     */
    public function getFileName(): string
    {
    }
    /**
     * @return string
     */
    public function getMimeType(): string
    {
    }
    /**
     * @return int
     */
    public function getFileSize(): int
    {
    }
}
