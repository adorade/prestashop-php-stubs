<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Interface for handling GetCustomerOrders query
 */
interface GetCustomerOrdersHandlerInterface
{
    /**
     * @param GetCustomerOrders $query
     *
     * @return OrderSummary[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerOrders $query): array;
}
