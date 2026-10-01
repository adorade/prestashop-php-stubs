<?php

namespace PrestaShop\PrestaShop\Adapter\Security;

class Access implements \PrestaShop\PrestaShop\Core\Security\AccessCheckerInterface, \PrestaShop\PrestaShop\Core\Security\EmployeePermissionProviderInterface
{
    public function isEmployeeGranted(string $action, int $employeeProfileId): bool
    {
    }
    public function getRoles(int $employeeProfileId): array
    {
    }
}
