<?php

namespace PrestaShop\PrestaShop\Core\Employee;

/**
 * Interface EmployeeDataProviderInterface describes an employee data provider.
 */
interface EmployeeDataProviderInterface
{
    /**
     * Get employee's hashed password by employee's ID.
     *
     * @param int $employeeId
     *
     * @return string
     */
    public function getEmployeeHashedPassword($employeeId);
    /**
     * Checks if employee is a super admin.
     *
     * @param int $employeeId
     *
     * @return bool
     */
    public function isSuperAdmin($employeeId);
}
