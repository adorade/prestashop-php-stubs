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
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\MemoryLimitException
     * @throws \PrestaShop\PrestaShop\Core\Image\Exception\ImageOptimizationException
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\ImageUploadException
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\UploadedImageConstraintException
     */
    public function upload($id, \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedImage)
    {
    }
}
