<?php

namespace PrestaShop\PrestaShop\Adapter\File\Uploader;

class AttributeFileUploader implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\AttributeFileUploaderInterface
{
    public function upload(string $filePath, int $id): void
    {
    }
    public function deleteOldFile(int $id): void
    {
    }
}
