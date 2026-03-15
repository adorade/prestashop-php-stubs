<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryHandler;

/**
 * Handles @see GetShopProductImages query
 */
interface GetShopProductImagesHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Query\GetShopProductImages $query): \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop\ShopProductImagesCollection;
}
