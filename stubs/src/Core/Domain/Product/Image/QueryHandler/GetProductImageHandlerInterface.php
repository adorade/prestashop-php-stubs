<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryHandler;

/**
 * Handles @see GetProductImage query
 */
interface GetProductImageHandlerInterface
{
    /**
     * @param GetProductImage $query
     *
     * @return ProductImage
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Query\GetProductImage $query): \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\ProductImage;
}
