<?php

namespace PrestaShop\PrestaShop\Adapter\Image;

class ProductImageFileValidator extends \PrestaShop\PrestaShop\Adapter\Image\ImageValidator
{
    public function __construct(int $maxUploadSizeInBytes, \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $uploadQuotaConfiguration)
    {
    }
    /**
     * @param string $filePath
     *
     * @throws UploadedImageSizeException
     */
    public function assertFileUploadLimits(string $filePath): void
    {
    }
}
