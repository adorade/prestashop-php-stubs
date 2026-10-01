<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Query;

class GetEmployeeEmailById
{
    /**
     * @param int $employeeId
     */
    public function __construct(int $employeeId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId
     */
    public function getEmployeeId(): \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId
    {
    }
}
