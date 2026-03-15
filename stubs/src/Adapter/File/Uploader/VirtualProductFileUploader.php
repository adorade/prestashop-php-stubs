<?php

namespace PrestaShop\PrestaShop\Adapter\File\Uploader;

/**
 * Uploads file for virtual product
 * Legacy object ProductDownload is referred as VirtualProductFile in Core
 */
class VirtualProductFileUploader
{
    /**
     * @param VirtualProductFileValidator $virtualProductFileValidator
     * @param string $downloadDir
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\File\Validator\VirtualProductFileValidator $virtualProductFileValidator, string $downloadDir)
    {
    }
    /**
     * @param string $filePath file to upload $filePath
     *
     * @return string uploaded file path
     */
    public function upload(string $filePath): string
    {
    }
    /**
     * @param string $filename
     */
    public function remove(string $filename): void
    {
    }
    /**
     * @param string $newFilepath
     * @param string|null $oldFilename
     *
     * @return string
     */
    public function replace(string $newFilepath, ?string $oldFilename): string
    {
    }
}
