<?php

namespace PrestaShopBundle\Service;

/**
 * @deprecated since 8.1 and will be removed in next major.
 */
class ProductService
{
    /**
     * @var ProductDataProvider
     */
    protected $dataProvider;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider $dataProvider)
    {
    }
    public function cleanupOldTempProducts()
    {
    }
}
