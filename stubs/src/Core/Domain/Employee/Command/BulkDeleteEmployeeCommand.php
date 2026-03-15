<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Command;

/**
 * Class BulkDeleteEmployeeCommand.
 */
class BulkDeleteEmployeeCommand
{
    /**
     * @param int[] $employeeIds
     */
    public function __construct(array $employeeIds)
    {
    }
    /**
     * @return EmployeeId[]
     */
    public function getEmployeeIds()
    {
    }
}
