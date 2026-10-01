<?php

namespace PrestaShop\PrestaShop\Adapter\File\Uploader;

/**
 * Uploads carrier logo file
 */
class CarrierLogoFileUploader implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CarrierLogoFileUploaderInterface
{
    public function upload(string $filePath, int $id): void
    {
    }
    public function deleteOldFile(int $id): void
    {
    }
}
