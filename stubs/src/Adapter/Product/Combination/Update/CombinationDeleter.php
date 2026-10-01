<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update;

class CombinationDeleter
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository
     * @param DefaultCombinationUpdater $defaultCombinationUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater $defaultCombinationUpdater)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     */
    public function deleteCombination(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId[] $combinationIds
     */
    public function bulkDeleteProductCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $combinationIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\InvalidProductTypeException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CannotDeleteCombinationException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function deleteAllProductCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
