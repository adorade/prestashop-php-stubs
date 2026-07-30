<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Exception;

/**
 * Class EmployeeNotFoundException is thrown when employee cannot be found.
 */
class EmployeeNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeException
{
    /**
     * @param EmployeeId $employeeId
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId $employeeId, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return EmployeeId
     */
    public function getEmployeeId()
    {
    }
}
