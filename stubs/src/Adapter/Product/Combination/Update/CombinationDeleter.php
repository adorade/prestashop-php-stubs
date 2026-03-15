<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update;

class CombinationDeleter
{
    /**
     * @param ProductRepository $productRepository
     * @param CombinationRepository $combinationRepository
     * @param DefaultCombinationUpdater $defaultCombinationUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater $defaultCombinationUpdater)
    {
    }
    /**
     * @param CombinationId $combinationId
     * @param ShopConstraint $shopConstraint
     */
    public function deleteCombination(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ProductId $productId
     * @param CombinationId[] $combinationIds
     */
    public function bulkDeleteProductCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $combinationIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ProductId $productId
     *
     * @throws InvalidProductTypeException
     * @throws CannotDeleteCombinationException
     * @throws CoreException
     */
    public function deleteAllProductCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
