<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/**
 * Uploads title logo image
 */
class TitleImageUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader implements \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface
{
    /**
     * {@inheritdoc}
     *
     * @param int|null $imageWidth
     * @param int|null $imageHeight
     *
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\ImageUploadException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleImageUploadingException
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\UploadedImageConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Image\Exception\ImageOptimizationException
     * @throws \PrestaShop\PrestaShop\Core\Image\Uploader\Exception\MemoryLimitException
     */
    public function upload($entityId, \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedImage, ?int $imageWidth = null, ?int $imageHeight = null)
    {
    }
    /**
     * Deletes old image
     *
     * @param int $id
     */
    protected function deleteOldImage(int $id): void
    {
    }
}
