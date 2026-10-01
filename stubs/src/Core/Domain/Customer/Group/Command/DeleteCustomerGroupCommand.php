<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command;

class DeleteCustomerGroupCommand
{
    public function __construct(int $groupId)
    {
    }
    public function getCustomerGroupId(): \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId
    {
    }
}
