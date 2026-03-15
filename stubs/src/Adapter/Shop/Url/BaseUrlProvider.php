<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Url;

/**
 * Class BaseUrlProvider provides base Front Office URL for context shop.
 */
final class BaseUrlProvider implements \PrestaShop\PrestaShop\Core\Shop\Url\UrlProviderInterface
{
    /**
     * @param Link $link
     */
    public function __construct(\Link $link)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
    }
}
