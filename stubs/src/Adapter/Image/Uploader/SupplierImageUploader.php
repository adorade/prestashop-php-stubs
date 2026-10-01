<?php

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

/**
 * Uploads supplier logo image
 */
final class SupplierImageUploader extends \PrestaShop\PrestaShop\Adapter\Image\Uploader\AbstractImageUploader implements \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function upload($supplierId, \Symfony\Component\HttpFoundation\File\UploadedFile $image)
    {
    }
}
