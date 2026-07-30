<?php

namespace PrestaShop\PrestaShop\Adapter\Employee;

/**
 * Class EmployeeDataProvider provides employee data using legacy logic.
 */
final class EmployeeDataProvider implements \PrestaShop\PrestaShop\Core\Employee\EmployeeDataProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getEmployeeHashedPassword($employeeId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isSuperAdmin($employeeId)
    {
    }
}
