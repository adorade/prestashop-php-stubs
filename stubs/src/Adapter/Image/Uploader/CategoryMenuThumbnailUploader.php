<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/**
 * Class CategoryMenuThumbnailUploader.
 */
final class CategoryMenuThumbnailUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader implements \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface
{
    /**
     * @param CacheClearerInterface $cacheClearer
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws ImageUploadException
     */
    public function upload($categoryId, \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedImage)
    {
    }
}
