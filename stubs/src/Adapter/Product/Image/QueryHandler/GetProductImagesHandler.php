<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\QueryHandler;

/**
 * Handles @see GetProductImages query
 */
final class GetProductImagesHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryHandler\GetProductImagesHandlerInterface
{
    /**
     * @param ProductImageRepository $productImageRepository
     * @param ProductImagePathFactory $productImageUrlFactory
     * @param ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageUrlFactory, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Query\GetProductImages $query): array
    {
    }
}
