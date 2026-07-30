<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Defines interface for service that get required fields for customer sign up
 */
interface GetRequiredFieldsForCustomerHandlerInterface
{
    /**
     * @param GetRequiredFieldsForCustomer $query
     *
     * @return string[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetRequiredFieldsForCustomer $query);
}
