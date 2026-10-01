<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\Query;

class GetCustomerGroupForEditing
{
    public function __construct(int $customerGroupId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId
     */
    public function getCustomerGroupId(): \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId
    {
    }
}
