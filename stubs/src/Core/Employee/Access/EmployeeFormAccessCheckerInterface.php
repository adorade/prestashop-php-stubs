<?php

namespace PrestaShop\PrestaShop\Core\Employee\Access;

/**
 * Interface EmployeeFormAccessCheckerInterface defines employee form access checker.
 */
interface EmployeeFormAccessCheckerInterface
{
    /**
     * Checks if employee has restricted access to the employee form.
     * Restricted access usually is used when an employee edits their own account.
     * Restricted access means that the employee is restricted from some of
     * the fields in the edit form, which would modify his account's accessibility.
     * E.g. active status, profile, shop association.
     *
     * @param int $employeeId
     *
     * @return bool
     */
    public function isRestrictedAccess($employeeId);
    /**
     * Check if context employee can access edit form for given employee.
     *
     * @param int $employeeId
     *
     * @return bool
     */
    public function canAccessEditFormFor($employeeId);
}
