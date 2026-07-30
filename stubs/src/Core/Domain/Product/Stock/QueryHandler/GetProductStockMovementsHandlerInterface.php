<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryHandler;

/**
 * Defines contract for GetStockMovementsHistoryHandler
 */
interface GetProductStockMovementsHandlerInterface
{
    /**
     * @return StockMovement[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\Query\GetProductStockMovements $query): array;
}
