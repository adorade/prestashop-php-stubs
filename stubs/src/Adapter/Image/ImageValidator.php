<?php

namespace PrestaShop\PrestaShop\Adapter\Image;

/**
 * Responsible for validating image before upload
 */
class ImageValidator
{
    /**
     * @var int
     */
    protected $maxUploadSize;
    /**
     * @param int $maxUploadSizeInBytes
     */
    public function __construct(int $maxUploadSizeInBytes)
    {
    }
    /**
     * @param string $filePath
     *
     * @throws ImageUploadException
     * @throws UploadedImageConstraintException
     */
    public function assertFileUploadLimits(string $filePath): void
    {
    }
    /**
     * @param string $filePath
     * @param array $allowedMimeTypes
     *
     * @throws ImageUploadException
     * @throws UploadedImageConstraintException
     */
    public function assertIsValidImageType(string $filePath, array $allowedMimeTypes = null): void
    {
    }
}
