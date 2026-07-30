<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryHandler;

/**
 * Interface for service that gets customer thread for viewing
 */
interface GetCustomerThreadForViewingHandlerInterface
{
    /**
     * @param GetCustomerThreadForViewing $query
     *
     * @return CustomerThreadView
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Query\GetCustomerThreadForViewing $query);
}
