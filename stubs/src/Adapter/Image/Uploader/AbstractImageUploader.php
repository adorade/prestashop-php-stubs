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
     * @param UploadedFile $image
     *
     * @throws UploadedImageConstraintException
     */
    public function checkImageIsAllowedForUpload(\Symfony\Component\HttpFoundation\File\UploadedFile $image)
    {
    }
    /**
     * Creates temporary image from uploaded file
     *
     * @param UploadedFile $image
     *
     * @throws ImageUploadException
     *
     * @return string
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
     * @throws ImageOptimizationException
     * @throws MemoryLimitException
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
     * @throws ImageOptimizationException
     */
    protected function generateDifferentSize($id, $imageDir, $belongsTo)
    {
    }
}
