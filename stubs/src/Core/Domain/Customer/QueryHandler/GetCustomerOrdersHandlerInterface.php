<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Interface for handling GetCustomerOrders query
 */
interface GetCustomerOrdersHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerOrders $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\OrderSummary[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerOrders $query): array;
}
