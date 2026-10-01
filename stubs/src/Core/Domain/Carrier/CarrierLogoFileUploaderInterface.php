<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier;

interface CarrierLogoFileUploaderInterface
{
    /**
     * @param string $filePath
     * @param int $id
     */
    public function upload(string $filePath, int $id): void;
    public function deleteOldFile(int $id): void;
}
