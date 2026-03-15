<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryHandler;

/**
 * Handles @see GetProductImages query
 */
interface GetProductImagesHandlerInterface
{
    /**
     * @param GetProductImages $query
     *
     * @return ProductImage[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Query\GetProductImages $query): array;
}
