<?php

namespace PrestaShopBundle\Command;

#[\Symfony\Component\Console\Attribute\AsCommand(name: 'prestashop:employee:create-admin', description: 'Create a new SuperAdmin back-office employee.')]
final class EmployeeCreateCommand extends \Symfony\Component\Console\Command\Command
{
    use \PrestaShopBundle\Command\PasswordPromptTrait;
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, private readonly \PrestaShop\PrestaShop\Adapter\Employee\EmployeeContextInitializer $employeeContextInitializer)
    {
    }
}
