<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryHandler;

/**
 * Defines contract for GetStockMovementsHistoryHandler
 */
interface GetCombinationStockMovementsHandlerInterface
{
    /**
     * @return StockMovement[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\Query\GetCombinationStockMovements $query): array;
}
