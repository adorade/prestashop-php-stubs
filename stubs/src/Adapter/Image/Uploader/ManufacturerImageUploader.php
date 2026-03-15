<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/**
 * Uploads manufacturer logo image
 */
final class ManufacturerImageUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader implements \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function upload($manufacturerId, \Symfony\Component\HttpFoundation\File\UploadedFile $image)
    {
    }
}
