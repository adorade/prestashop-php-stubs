<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Query;

/**
 * Gets employee information for editing.
 */
class GetEmployeeForEditing
{
    /**
     * @param int $employeeId
     */
    public function __construct($employeeId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId
     */
    public function getEmployeeId()
    {
    }
}
