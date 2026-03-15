<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Url;

/**
 * Class CategoryProvider provides base Front Office URL for context shop.
 */
final class CategoryProvider implements \PrestaShop\PrestaShop\Core\Shop\Url\UrlProviderInterface
{
    /**
     * @param Link $link
     */
    public function __construct(\Link $link)
    {
    }
    /**
     * Create a link to a category.
     *
     * @param int $categoryId
     * @param string $rewrite
     *
     * @return string
     */
    public function getUrl($categoryId = null, $rewrite = null)
    {
    }
}
