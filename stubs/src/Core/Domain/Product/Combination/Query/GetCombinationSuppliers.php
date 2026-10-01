<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query;

/**
 * Retrieves data for product combination supplier
 *
 * @see GetCombinationSuppliersHandlerInterface
 */
class GetCombinationSuppliers
{
    /**
     * @param int $combinationId
     */
    public function __construct(int $combinationId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
}
