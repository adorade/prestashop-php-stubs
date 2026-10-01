<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject;

/**
 * Defines Employee ID with it's constraints.
 */
class EmployeeId implements \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeIdInterface
{
    /**
     * @param int $employeeId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\InvalidEmployeeIdException
     */
    public function __construct($employeeId)
    {
    }
    public function getValue(): int
    {
    }
}
