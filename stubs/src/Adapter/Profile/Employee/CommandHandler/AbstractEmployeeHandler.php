<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler;

/**
 * Class AbstractEmployeeStatusHandler.
 */
abstract class AbstractEmployeeHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId $employeeId
     * @param \Employee $employee
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeNotFoundException
     */
    protected function assertEmployeeWasFoundById(\PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId $employeeId, \Employee $employee)
    {
    }
    /**
     * If employee is admin and no other admins exists, then terminate command execution.
     *
     * @param \Employee $employee
     */
    protected function assertEmployeeIsNotTheOnlyAdminInShop(\Employee $employee)
    {
    }
    /**
     * If logged in employee is trying to toggle itself, then terminate execution.
     *
     * @param \Employee $employee
     */
    protected function assertLoggedInEmployeeIsNotTheSameAsBeingUpdatedEmployee(\Employee $employee)
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeConstraintException
     */
    protected function assertHomepageIsAccessible(int $tabId, int $profileId): void
    {
    }
}
