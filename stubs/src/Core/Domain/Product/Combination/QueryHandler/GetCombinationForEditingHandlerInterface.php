<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

/**
 * Handles @see GetCombinationForEditing query
 */
interface GetCombinationForEditingHandlerInterface
{
    /**
     * @param GetCombinationForEditing $query
     *
     * @return CombinationForEditing
     *
     * @throws CombinationNotFoundException
     * @throws CombinationShopAssociationNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationForEditing;
}
