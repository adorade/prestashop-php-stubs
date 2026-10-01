<?php

namespace PrestaShop\PrestaShop\Core\Image;

/**
 * Interface ThumbnailProviderInterface.
 */
interface ImageProviderInterface
{
    /**
     * Get thumbnail image path.
     *
     * @param int $imageId
     *
     * @return string Path to thumbnail
     */
    public function getPath($imageId);
}
