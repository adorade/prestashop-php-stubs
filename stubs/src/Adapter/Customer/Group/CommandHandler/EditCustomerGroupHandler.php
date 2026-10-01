<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Group\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditCustomerGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\Group\CommandHandler\EditCustomerGroupHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Customer\Group\Validate\CustomerGroupValidator $customerGroupValidator, private readonly \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository $customerGroupRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command\EditCustomerGroupCommand $command): void
    {
    }
}
