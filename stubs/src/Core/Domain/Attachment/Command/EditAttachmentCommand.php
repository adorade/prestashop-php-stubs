<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Command;

/**
 * Attachment editing command
 */
class EditAttachmentCommand
{
    /**
     * @param AttachmentId $attachmentId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId $attachmentId)
    {
    }
    /**
     * @return AttachmentId
     */
    public function getAttachmentId(): \PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId
    {
    }
    /**
     * @return string
     */
    public function getPathName(): ?string
    {
    }
    /**
     * @param string $pathName
     * @param string $mimeType
     * @param string $originalFileName
     * @param int $fileSize
     *
     * @return EditAttachmentCommand
     */
    public function setFileInfo(string $pathName, string $mimeType, string $originalFileName, int $fileSize): \PrestaShop\PrestaShop\Core\Domain\Attachment\Command\EditAttachmentCommand
    {
    }
    /**
     * @return string|null
     */
    public function getOriginalFileName(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getMimeType(): ?string
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @param string[] $localizedNames
     *
     * @return EditAttachmentCommand
     */
    public function setLocalizedNames(array $localizedNames): \PrestaShop\PrestaShop\Core\Domain\Attachment\Command\EditAttachmentCommand
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedDescriptions(): ?array
    {
    }
    /**
     * @param string[]|null $localizedDescriptions
     *
     * @return EditAttachmentCommand
     */
    public function setLocalizedDescriptions(?array $localizedDescriptions): \PrestaShop\PrestaShop\Core\Domain\Attachment\Command\EditAttachmentCommand
    {
    }
    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
    }
}
