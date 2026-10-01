<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Exception;

/**
 * Class EmployeeNotFoundException is thrown when employee cannot be found.
 */
class EmployeeNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeException
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId|null $employeeId The employee id is not always known, typically when the employee was searched by email
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(?\PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId $employeeId = null, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId|null
     */
    public function getEmployeeId()
    {
    }
}
