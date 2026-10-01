<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryHandler;

/**
 * Handles @see GetProductImages query
 */
interface GetProductImagesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\Query\GetProductImages $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\ProductImage[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Query\GetProductImages $query): array;
}
