<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Group\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddCustomerGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\Group\CommandHandler\AddCustomerGroupHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Customer\Group\Validate\CustomerGroupValidator $customerGroupValidator, private readonly \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository $customerGroupRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command\AddCustomerGroupCommand $command): \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId
    {
    }
}
