<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Group\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteCustomerGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\Group\CommandHandler\DeleteCustomerGroupHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository $customerGroupRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command\DeleteCustomerGroupCommand $command): void
    {
    }
}
