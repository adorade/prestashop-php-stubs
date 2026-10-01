<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Group\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetCustomerGroupForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\Group\QueryHandler\GetCustomerGroupForEditingHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository $customerGroupRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Group\Query\GetCustomerGroupForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\Group\QueryResult\EditableCustomerGroup
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Group\Exception\GroupNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\Query\GetCustomerGroupForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Customer\Group\QueryResult\EditableCustomerGroup
    {
    }
}
