<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Url;

class ProductPreviewProvider implements \PrestaShop\PrestaShop\Core\Shop\Url\UrlProviderInterface
{
    /**
     * @var Link
     */
    protected $link;
    /**
     * @var int
     */
    protected $employeeId;
    public function __construct(\Link $link, bool $urlRewritingIsEnabled, int $employeeId)
    {
    }
    /**
     * Create a link to a product.
     *
     * @param int|null $productId
     * @param bool $active
     * @param int|null $shopId
     *
     * @return string
     */
    public function getUrl(?int $productId = null, ?bool $active = true, ?int $shopId = null): string
    {
    }
}
