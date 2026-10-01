<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Class GetCustomerInformationHandlerInterface.
 */
interface GetCustomerForViewingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForViewing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\ViewableCustomer
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForViewing $query);
}
