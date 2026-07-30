<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Exception;

/**
 * Class AdminEmployeeException is thrown when last admin of the shop is being disabled or deleted.
 */
class AdminEmployeeException extends \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeException
{
    /**
     * Code is used when the only admin of the shop is being disabled or deleted.
     */
    public const CANNOT_CHANGE_LAST_ADMIN = 1;
}
