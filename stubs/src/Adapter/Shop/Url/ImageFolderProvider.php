<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Url;

/**
 * Returns the base url of an image folder (product, categories, ...)
 */
class ImageFolderProvider implements \PrestaShop\PrestaShop\Core\Shop\Url\UrlProviderInterface
{
    /**
     * @param Link $link
     * @param string $imagesRelativeFolder
     */
    public function __construct(\Link $link, string $imagesRelativeFolder)
    {
    }
    /**
     * Create a link to product images base folder.
     *
     * @return string
     */
    public function getUrl(): string
    {
    }
}
