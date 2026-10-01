<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\QueryHandler;

interface GetCustomerGroupForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Group\Query\GetCustomerGroupForEditing $customerForEditingQuery
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\Group\QueryResult\EditableCustomerGroup
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\Query\GetCustomerGroupForEditing $customerForEditingQuery): \PrestaShop\PrestaShop\Core\Domain\Customer\Group\QueryResult\EditableCustomerGroup;
}
