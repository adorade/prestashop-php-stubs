<?php

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult;

/**
 * Stores editable data for attachment
 */
class EditableAttachment
{
    /**
     * @param string $fileName
     * @param string[] $name
     * @param string[] $description
     */
    public function __construct(string $fileName, array $name, array $description)
    {
    }
    /**
     * @return string
     */
    public function getFileName(): string
    {
    }
    /**
     * @return string[]
     */
    public function getName(): array
    {
    }
    /**
     * @return string[]|null
     */
    public function getDescription(): ?array
    {
    }
    /**
     * @return SplFileInfo|null
     */
    public function getFile(): ?\SplFileInfo
    {
    }
    /**
     * @param SplFileInfo|null $file
     *
     * @return EditableAttachment
     */
    public function setFile(?\SplFileInfo $file): \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\EditableAttachment
    {
    }
}
