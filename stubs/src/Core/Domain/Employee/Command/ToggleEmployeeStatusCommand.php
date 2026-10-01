<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Command;

/**
 * Class ToggleEmployeeStatusCommand.
 */
class ToggleEmployeeStatusCommand
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
