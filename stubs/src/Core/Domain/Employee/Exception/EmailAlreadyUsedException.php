<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Exception;

/**
 * Thrown when employee's email is already used by another employee.
 */
class EmailAlreadyUsedException extends \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeException
{
    /**
     * @param string $email the email that's being used
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($email, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return string
     */
    public function getEmail()
    {
    }
}
