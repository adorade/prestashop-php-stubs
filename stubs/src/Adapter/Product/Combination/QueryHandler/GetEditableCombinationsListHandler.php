<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler;

/**
 * Handles @see GetEditableCombinationsList using legacy object model
 */
final class GetEditableCombinationsListHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetEditableCombinationsListHandlerInterface
{
    /**
     * @param DoctrineQueryBuilderInterface $combinationQueryBuilder
     * @param AttributeRepository $attributeRepository
     * @param ProductImageRepository $productImageRepository
     * @param ProductImagePathFactory $productImagePathFactory
     * @param CombinationNameBuilderInterface $combinationNameBuilder
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
