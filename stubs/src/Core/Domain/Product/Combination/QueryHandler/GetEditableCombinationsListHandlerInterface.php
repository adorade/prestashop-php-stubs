<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

/**
 * Defines contract to handle @see GetEditableCombinationsList query
 */
interface GetEditableCombinationsListHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetEditableCombinationsList $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationListForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetEditableCombinationsList $query): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationListForEditing;
}
