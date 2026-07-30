<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Exception;

/**
 * Is thrown when employee constraint is violated
 */
class EmployeeConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeException
{
    /**
     * @var int Code is used when invalid email is provided for employee
     */
    public const INVALID_EMAIL = 1;
    /**
     * @var int Code is used when invalid first name is provided for employee
     */
    public const INVALID_FIRST_NAME = 2;
    /**
     * @var int Code is used when invalid last name is provided for employee
     */
    public const INVALID_LAST_NAME = 3;
    /**
     * @var int code is used when password of invalid length is provided for employee
     */
    public const INVALID_PASSWORD = 4;
    /**
     * @var int Code is used when incorrect password is provided for employee
     */
    public const INCORRECT_PASSWORD = 5;
}
