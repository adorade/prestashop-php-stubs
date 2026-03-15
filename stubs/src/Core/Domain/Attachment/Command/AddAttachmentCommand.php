<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Command;

/**
 * Attachment creation command
 */
class AddAttachmentCommand
{
    /**
     * @param array $localizedNames
     * @param array $localizedDescriptions
     */
    public function __construct(array $localizedNames, array $localizedDescriptions)
    {
    }
    /**
     * @param string $pathName
     * @param int $fileSize
     * @param string $mimeType
     * @param string $originalName
     */
    public function setFileInformation(string $pathName, int $fileSize, string $mimeType, string $originalName): void
    {
    }
    /**
     * @return string|null
     */
    public function getFilePathName(): ?string
    {
    }
    /**
     * @return int|null
     */
    public function getFileSize(): ?int
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
     * @return string|null
     */
    public function getMimeType(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getOriginalName(): ?string
    {
    }
}
