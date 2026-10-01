<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Interface for service that gets customer data for editing
 */
interface GetCustomerForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\EditableCustomer
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForEditing $query);
}
