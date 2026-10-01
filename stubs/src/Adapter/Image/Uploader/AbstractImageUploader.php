<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/**
 * Class AbstractImageUploader encapsulates reusable legacy methods used for image uploading.
 *
 * @internal
 */
abstract class AbstractImageUploader
{
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\UploadedImageConstraintException
     */
    public function checkImageIsAllowedForUpload(\Symfony\Component\HttpFoundation\File\UploadedFile $image)
    {
    }
    /**
     * Creates temporary image from uploaded file
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return string
     *
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\ImageUploadException
     */
    protected function createTemporaryImage(\Symfony\Component\HttpFoundation\File\UploadedFile $image)
    {
    }
    /**
     * Uploads resized image from temporary folder to image destination
     *
     * @param string $temporaryImageName
     * @param string $destination
     *
     * @throws \PrestaShop\PrestaShop\Core\Image\Exception\ImageOptimizationException
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\MemoryLimitException
     */
    protected function uploadFromTemp($temporaryImageName, $destination)
    {
    }
    /**
     * Generates different size images
     *
     * @param int $id
     * @param string $imageDir
     * @param string $belongsTo to whom the image belongs (for example 'suppliers' or 'categories')
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Image\Exception\ImageOptimizationException
     */
    protected function generateDifferentSize($id, $imageDir, $belongsTo)
    {
    }
}
