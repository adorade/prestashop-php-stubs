<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Command;

/**
 * Class DeleteEmployeeCommand deletes given employee.
 */
class DeleteEmployeeCommand
{
    /**
     * @param int $employeeId
     */
    public function __construct($employeeId)
    {
    }
    /**
     * @return EmployeeId
     */
    public function getEmployeeId()
    {
    }
}
