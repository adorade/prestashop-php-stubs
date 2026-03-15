<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Defines contract for customer by email search handler
 */
interface GetCustomerForAddressCreationHandlerInterface
{
    /**
     * @param GetCustomerForAddressCreation $query
     *
     * @return AddressCreationCustomerInformation
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForAddressCreation $query): \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\AddressCreationCustomerInformation;
}
