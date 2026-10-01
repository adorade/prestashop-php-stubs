<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject;

class NoEmployeeId implements \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeIdInterface
{
    /**
     * @var int
     */
    public const NO_EMPLOYEE_ID_VALUE = 0;
    public function getValue(): int
    {
    }
}
