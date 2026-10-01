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
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId[]
     */
    public function getEmployeeIds()
    {
    }
}
