<?php

namespace PrestaShop\PrestaShop\Adapter\Image;

/**
 * Responsible for resizing images based on provided types
 */
class ImageGenerator
{
    public function __construct(\PrestaShopBundle\Entity\Repository\FeatureFlagRepository $featureFlagRepository, \PrestaShop\PrestaShop\Core\Image\ImageFormatConfiguration $imageFormatConfiguration)
    {
    }
    /**
     * @param string $imagePath
     * @param ImageType[] $imageTypes
     * @param int $imageId
     *
     * @return bool
     *
     * @throws ImageOptimizationException
     * @throws ImageUploadException
     */
    public function generateImagesByTypes(string $imagePath, array $imageTypes, int $imageId = 0): bool
    {
    }
    /**
     * Resizes the image depending on its type
     *
     * @param string $filePath
     * @param ImageType $imageType
     * @param int $imageId
     *
     * @return bool
     */
    protected function resize(string $filePath, \ImageType $imageType, int $imageId = 0): bool
    {
    }
}
