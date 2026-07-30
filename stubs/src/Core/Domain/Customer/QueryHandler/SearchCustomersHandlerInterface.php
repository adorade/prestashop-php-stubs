<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Interface for service that handles customers searching command
 */
interface SearchCustomersHandlerInterface
{
    /**
     * @param SearchCustomers $query
     *
     * @return array
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\SearchCustomers $query);
}
