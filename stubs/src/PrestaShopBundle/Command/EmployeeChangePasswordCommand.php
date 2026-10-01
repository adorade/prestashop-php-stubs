<?php

namespace PrestaShopBundle\Command;

#[\Symfony\Component\Console\Attribute\AsCommand(name: 'prestashop:employee:change-password', description: 'Change an employee password from the CLI.')]
final class EmployeeChangePasswordCommand extends \Symfony\Component\Console\Command\Command
{
    use \PrestaShopBundle\Command\PasswordPromptTrait;
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\EmployeeRepository $employeeRepository, private readonly \PrestaShopBundle\Security\Admin\EmployeePasswordResetter $passwordResetter)
    {
    }
}
