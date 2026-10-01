<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler;

/**
 * Handles @see GetCombinationStockMovements using the adapter repositories.
 */
class GetCombinationStockMovementsHandler extends \PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler\AbstractGetStockMovementsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Stock\QueryHandler\GetCombinationStockMovementsHandlerInterface
{
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\Query\GetCombinationStockMovements $query): array
    {
    }
}
