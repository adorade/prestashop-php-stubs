<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\QueryHandler;

/**
 * Handles @see GetProductImage query
 */
class GetProductImageHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryHandler\GetProductImageHandlerInterface
{
    /**
     * @param ProductImageRepository $productImageRepository
     * @param ProductImagePathFactory $productImageUrlFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageUrlFactory)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Query\GetProductImage $query): \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\ProductImage
    {
    }
}
