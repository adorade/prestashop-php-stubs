<?php

namespace PrestaShop\PrestaShop\Core\Security;

interface AccessCheckerInterface
{
    public function isEmployeeGranted(string $action, int $employeeProfileId): bool;
}
