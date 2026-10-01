<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\QueryHandler;

/**
 * Handles @see GetShopProductImages query
 */
final class GetShopProductImagesHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryHandler\GetShopProductImagesHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Query\GetShopProductImages $query): \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop\ShopProductImagesCollection
    {
    }
}
