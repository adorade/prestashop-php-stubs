<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult;

/**
 * Transfers product combinations data
 */
class CombinationListForEditing
{
    /**
     * @param int $totalCombinationsCount
     * @param EditableCombinationForListing[] $combinations
     */
    public function __construct(int $totalCombinationsCount, array $combinations)
    {
    }
    /**
     * @return EditableCombinationForListing[]
     */
    public function getCombinations(): array
    {
    }
    /**
     * @return int
     */
    public function getTotalCombinationsCount(): int
    {
    }
}
