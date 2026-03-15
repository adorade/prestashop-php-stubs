<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

class SearchProductsForAssociationHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler\SearchProductsForAssociationHandlerInterface
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;
    /**
     * @param ProductRepository $productRepository
     * @param ProductImagePathFactory $productImagePathFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProductsForAssociation $query): array
    {
    }
}
