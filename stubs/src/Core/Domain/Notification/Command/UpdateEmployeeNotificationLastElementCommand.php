<?php

namespace PrestaShop\PrestaShop\Core\Domain\Notification\Command;

/**
 * Updates the last notification element from a given type seen by the employee
 */
class UpdateEmployeeNotificationLastElementCommand
{
    /**
     * @param string $type
     *
     * @throws NotificationException
     */
    public function __construct(string $type)
    {
    }
    /**
     * @return Type
     */
    public function getType()
    {
    }
}
