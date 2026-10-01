<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler;

/**
 * Interface for service that gets customer thread for viewing
 */
interface GetCustomerThreadForViewingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CustomerService\Query\GetCustomerThreadForViewing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryResult\CustomerThreadView
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Query\GetCustomerThreadForViewing $query);
}
