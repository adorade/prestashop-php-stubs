<?php

namespace PrestaShop\PrestaShop\Core\Image\Deleter;

/**
 * Class ImageFileDeleter is responsible for deleting image files.
 */
final class ImageFileDeleter implements \PrestaShop\PrestaShop\Core\Image\Deleter\ImageFileDeleterInterface
{
    /**
     * {@inheritdoc}
     */
    public function deleteFromPath($path, $recursively = false, $deleteSubdirectories = false, $format = 'jpg')
    {
    }
    /**
     * {@inheritdoc}
     */
    public function deleteAllImages($path, $format = 'jpg')
    {
    }
}
