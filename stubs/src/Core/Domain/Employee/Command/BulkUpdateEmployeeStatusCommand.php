<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Command;

/**
 * Class UpdateEmployeesStatusCommand updates employees status.
 */
class BulkUpdateEmployeeStatusCommand
{
    /**
     * @param int[] $employeeIds
     * @param bool $status
     */
    public function __construct(array $employeeIds, $status)
    {
    }
    /**
     * @return bool
     */
    public function getStatus()
    {
    }
    /**
     * @return EmployeeId[]
     */
    public function getEmployeeIds()
    {
    }
}
