<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

/**
 * Defines contract to handle @see GetCombinationIds query
 *
 * @see GetCombinationIds
 */
interface GetCombinationIdsHandlerInterface
{
    /**
     * @param GetCombinationIds $query
     *
     * @return CombinationId[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationIds $query): array;
}
