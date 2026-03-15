<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject;

/**
 * Defines Employee ID with it's constraints.
 */
class EmployeeId
{
    /**
     * @param int $employeeId
     *
     * @throws InvalidEmployeeIdException
     */
    public function __construct($employeeId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
