<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command;

/**
 * Associates supplier with product combination
 *
 * @see UpdateCombinationSuppliersHandlerInterface
 */
class UpdateCombinationSuppliersCommand
{
    /**
     * @param int $combinationId
     * @param array<int, array<string, string|int|null>> $combinationSuppliers
     */
    public function __construct(int $combinationId, array $combinationSuppliers)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\ProductSupplierUpdate>
     */
    public function getCombinationSuppliers(): array
    {
    }
}
