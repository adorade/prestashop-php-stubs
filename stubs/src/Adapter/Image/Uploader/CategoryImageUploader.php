<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/** One service that uploads all category images */
class CategoryImageUploader
{
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $categoryCoverUploader, \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $categoryThumbnailUploader)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile|null $coverImage
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile|null $thumbnailImage
     */
    public function uploadImages(\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId, ?\Symfony\Component\HttpFoundation\File\UploadedFile $coverImage = null, ?\Symfony\Component\HttpFoundation\File\UploadedFile $thumbnailImage = null): void
    {
    }
}
