<?php

namespace PrestaShop\PrestaShop\Core\Domain\Notification\Query;

/**
 * This Query return the last Notifications elements
 */
class GetNotificationLastElements
{
    /**
     * GetNotificationLastElements constructor.
     *
     * @param int $employeeId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\InvalidEmployeeIdException
     */
    public function __construct(int $employeeId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId
     */
    public function getEmployeeId(): \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId
    {
    }
}
