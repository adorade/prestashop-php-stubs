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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Notification\Exception\NotificationException
     */
    public function __construct(string $type)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Notification\ValueObject\Type
     */
    public function getType()
    {
    }
}
