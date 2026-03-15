<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Url;

/**
 * @deprecated Since 8.0.0 and will be removed in the next major version. Use ImageFolderProvider instead.
 */
class ProductImageFolderProvider implements \PrestaShop\PrestaShop\Core\Shop\Url\UrlProviderInterface
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
