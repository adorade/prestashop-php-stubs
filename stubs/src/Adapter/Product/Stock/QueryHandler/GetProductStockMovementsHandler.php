<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler;

/**
 * Handles @see GetProductStockMovements using the adapter repositories.
 */
class GetProductStockMovementsHandler extends \PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler\AbstractGetStockMovementsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryHandler\GetProductStockMovementsHandlerInterface
{
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\Query\GetProductStockMovements $query): array
    {
    }
}
