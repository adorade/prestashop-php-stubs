<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Class responsible of finding images and creating thumbnails.
 */
class ImageManager
{
    /**
     * @param LegacyContext $legacyContext
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * Old legacy way to generate a thumbnail.
     *
     * Use it upon a new Image management system is available.
     *
     * @param int $imageId
     * @param string $imageType
     * @param string $tableName
     * @param string $imageDir
     *
     * @return string The HTML < img > tag
     */
    public function getThumbnailForListing($imageId, $imageType = 'jpg', $tableName = 'product', $imageDir = _PS_PRODUCT_IMG_DIR_)
    {
    }
    /**
     * @param int $imageId
     *
     * @return string
     */
    public function getThumbnailPath($imageId)
    {
    }
}
