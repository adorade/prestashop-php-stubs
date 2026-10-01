<?php

namespace PrestaShopBundle\Twig\Component;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig')]
class EmployeeDropdown
{
    public ?\PrestaShop\PrestaShop\Core\Action\ActionsBarButtonsCollection $displayBackOfficeEmployeeMenu = null;
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, protected readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext)
    {
    }
    public function getEmployee(): ?\PrestaShop\PrestaShop\Core\Context\Employee
    {
    }
    public function getDisplayBackOfficeEmployeeMenu()
    {
    }
}
