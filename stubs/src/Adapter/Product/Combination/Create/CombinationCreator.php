<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Create;

/**
 * Creates combinations from attributes
 */
class CombinationCreator
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Product\Combination\Generator\CombinationGeneratorInterface $combinationGenerator
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater $defaultCombinationUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Product\Combination\Generator\CombinationGeneratorInterface $combinationGenerator, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository\AttributeGroupRepository $attributeGroupRepository, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater $defaultCombinationUpdater)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\GroupedAttributeIds[] $groupedAttributeIdsList
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId[]
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\InvalidProductTypeException
     */
    public function createCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $groupedAttributeIdsList, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
}
