<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Exception;

/**
 * Class EmployeeCannotChangeItselfException is thrown when employee is trying to change status or delete itself.
 */
class EmployeeCannotChangeItselfException extends \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeException
{
    /**
     * Code is used when employee which is logged in tries to change its status.
     */
    public const CANNOT_CHANGE_STATUS = 1;
}
