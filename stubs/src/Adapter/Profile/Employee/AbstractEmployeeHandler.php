<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee;

abstract class AbstractEmployeeHandler
{
    /**
     * @param EmployeeId $employeeId
     *
     * @return Employee
     *
     * @throws EmployeeNotFoundException
     */
    protected function getEmployee(\PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId $employeeId): \Employee
    {
    }
}
