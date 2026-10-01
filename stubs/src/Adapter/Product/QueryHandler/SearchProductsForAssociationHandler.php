<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class SearchProductsForAssociationHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler\SearchProductsForAssociationHandlerInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository
     */
    protected $productRepository;
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory
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
