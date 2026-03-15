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
     * @throws InvalidEmployeeIdException
     */
    public function __construct(int $employeeId)
    {
    }
    /**
     * @return EmployeeId
     */
    public function getEmployeeId(): \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId
    {
    }
}
