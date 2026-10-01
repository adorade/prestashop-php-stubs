<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler;

/**
 * Handles @see GetEditableCombinationsList using legacy object model
 */
final class GetEditableCombinationsListHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetEditableCombinationsListHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface $combinationQueryBuilder
     * @param \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory
     * @param \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface $combinationQueryBuilder, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory, \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetEditableCombinationsList $query): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationListForEditing
    {
    }
}
