<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class SendEmployeePasswordResetEmailHandler implements \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\SendEmployeePasswordResetEmailHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Security\Admin\EmployeePasswordResetter $employeePasswordResetter)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\SendEmployeePasswordResetEmailCommand $command): string
    {
    }
}
