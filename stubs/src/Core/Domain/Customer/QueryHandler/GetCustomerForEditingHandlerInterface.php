<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Interface for service that gets customer data for editing
 */
interface GetCustomerForEditingHandlerInterface
{
    /**
     * @param GetCustomerForEditing $query
     *
     * @return EditableCustomer
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForEditing $query);
}
