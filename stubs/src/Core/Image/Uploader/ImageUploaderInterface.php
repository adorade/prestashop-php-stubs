<?php

namespace PrestaShop\PrestaShop\Core\Image\Uploader;

/**
 * Interface ImageUploaderInterface is contract for entity (e.g. Category, Product & etc.) image uploader.
 */
interface ImageUploaderInterface
{
    /**
     * Upload entity image.
     *
     * @param int $entityId
     * @param UploadedFile $uploadedImage
     */
    public function upload($entityId, \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedImage);
}
