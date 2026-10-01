<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class ResetEmployeePasswordHandler implements \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\ResetEmployeePasswordHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Security\Admin\EmployeePasswordResetter $employeePasswordResetter)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\ResetEmployeePasswordCommand $command): void
    {
    }
}
