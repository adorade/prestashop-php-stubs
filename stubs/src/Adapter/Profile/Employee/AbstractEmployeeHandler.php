<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee;

abstract class AbstractEmployeeHandler
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId $employeeId
     *
     * @return \Employee
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeNotFoundException
     */
    protected function getEmployee(\PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId $employeeId): \Employee
    {
    }
}
