<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler;

/**
 * Class AbstractEmployeeStatusHandler.
 */
abstract class AbstractEmployeeHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * @param EmployeeId $employeeId
     * @param Employee $employee
     *
     * @throws EmployeeNotFoundException
     */
    protected function assertEmployeeWasFoundById(\PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId $employeeId, \Employee $employee)
    {
    }
    /**
     * If employee is admin and no other admins exists, then terminate command execution.
     *
     * @param Employee $employee
     */
    protected function assertEmployeeIsNotTheOnlyAdminInShop(\Employee $employee)
    {
    }
    /**
     * If logged in employee is trying to toggle itself, then terminate execution.
     *
     * @param Employee $employee
     */
    protected function assertLoggedInEmployeeIsNotTheSameAsBeingUpdatedEmployee(\Employee $employee)
    {
    }
    /**
     * Make sure that given employee does not manage any warehouse.
     *
     * Even though Warehouse feature was removed in 1.7
     * but the code related to it still exists
     * thus assertion is kept for BC i guess.
     *
     * @param Employee $employee
     */
    protected function assertEmployeeDoesNotManageWarehouse(\Employee $employee)
    {
    }
}
