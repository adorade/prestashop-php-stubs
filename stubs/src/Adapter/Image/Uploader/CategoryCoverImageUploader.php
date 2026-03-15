<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/**
 * Class CategoryCoverImageUploader.
 *
 * @internal
 */
final class CategoryCoverImageUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader implements \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws MemoryLimitException
     * @throws ImageOptimizationException
     * @throws ImageUploadException
     * @throws UploadedImageConstraintException
     */
    public function upload($id, \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedImage)
    {
    }
}
