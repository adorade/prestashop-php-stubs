<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

class GetRelatedProductsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler\GetRelatedProductsHandlerInterface
{
    /**
     * @param ProductRepository $productRepository
     * @param ProductImageRepository $productImageRepository
     * @param ProductImagePathFactory $productImagePathFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\GetRelatedProducts $query): array
    {
    }
}
