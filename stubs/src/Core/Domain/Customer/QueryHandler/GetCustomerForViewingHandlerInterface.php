<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Class GetCustomerInformationHandlerInterface.
 */
interface GetCustomerForViewingHandlerInterface
{
    /**
     * @param GetCustomerForViewing $query
     *
     * @return ViewableCustomer
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForViewing $query);
}
