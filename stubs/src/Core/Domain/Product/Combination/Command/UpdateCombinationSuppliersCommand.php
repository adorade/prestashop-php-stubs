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
     * @return CombinationId
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return array<int, ProductSupplierUpdate>
     */
    public function getCombinationSuppliers(): array
    {
    }
}
