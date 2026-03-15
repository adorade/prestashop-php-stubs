<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Url;

/**
 * Class CmsProvider provides base Front Office URL for context shop.
 */
final class CmsProvider implements \PrestaShop\PrestaShop\Core\Shop\Url\UrlProviderInterface
{
    /**
     * @param Link $link
     */
    public function __construct(\Link $link)
    {
    }
    /**
     * Create a link to a cms.
     *
     * @param int $cmsId
     * @param string $rewrite
     *
     * @return string
     */
    public function getUrl($cmsId = null, $rewrite = null)
    {
    }
}
