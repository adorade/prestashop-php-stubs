<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

/**
 * Handles @see GetCombinationForEditing query
 */
interface GetCombinationForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationForEditing
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationShopAssociationNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationForEditing;
}
