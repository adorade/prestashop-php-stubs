<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler;

/**
 * Defines contract for GetOrderProductsForViewing query handler
 */
interface GetOrderProductsForViewingHandlerInterface
{
    /**
     * @param GetOrderProductsForViewing $query
     *
     * @return OrderProductsForViewing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderProductsForViewing $query);
}
