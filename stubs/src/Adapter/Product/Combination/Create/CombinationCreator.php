<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Create;

/**
 * Creates combinations from attributes
 */
class CombinationCreator
{
    /**
     * @param CombinationGeneratorInterface $combinationGenerator
     * @param CombinationRepository $combinationRepository
     * @param ProductRepository $productRepository
     * @param StockAvailableRepository $stockAvailableRepository
     * @param DefaultCombinationUpdater $defaultCombinationUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Product\Combination\Generator\CombinationGeneratorInterface $combinationGenerator, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository\AttributeGroupRepository $attributeGroupRepository, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater $defaultCombinationUpdater)
    {
    }
    /**
     * @param ProductId $productId
     * @param GroupedAttributeIds[] $groupedAttributeIdsList
     * @param ShopConstraint $shopConstraint
     *
     * @return CombinationId[]
     *
     * @throws CoreException
     * @throws InvalidProductTypeException
     */
    public function createCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $groupedAttributeIdsList, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
}
