<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Url;

/**
 * Class ProductProvider provides base Front Office URL for context shop.
 */
class ProductProvider implements \PrestaShop\PrestaShop\Core\Shop\Url\UrlProviderInterface
{
    /**
     * @param Link $link
     */
    public function __construct(\Link $link)
    {
    }
    /**
     * Create a link to a product.
     *
     * @param int|null $productId
     * @param string|null $rewrite
     *
     * @return string
     */
    public function getUrl(?int $productId = null, ?string $rewrite = null): string
    {
    }
}
