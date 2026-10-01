<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/**
 * Class CategoryThumbnailImageUploader.
 */
final class CategoryThumbnailImageUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader implements \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\UploadedImageConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\ImageUploadException
     * @throws \PrestaShop\PrestaShop\Core\Image\Exception\ImageOptimizationException
     */
    public function upload($id, \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedImage)
    {
    }
}
