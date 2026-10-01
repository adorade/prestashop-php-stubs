<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler;

/**
 * Defines contract for GetOrderProductsForViewing query handler
 */
interface GetOrderProductsForViewingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderProductsForViewing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderProductsForViewing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderProductsForViewing $query);
}
