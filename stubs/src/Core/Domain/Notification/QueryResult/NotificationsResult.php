<?php

namespace PrestaShop\PrestaShop\Core\Domain\Notification\QueryResult;

/**
 * NotificationsResult contains a collection of Notifications as well as their type and the total
 */
class NotificationsResult
{
    /**
     * NotificationsResult constructor.
     *
     * @param string $type
     * @param int $total
     * @param NotificationResult[] $notifications
     *
     * @throws NotificationException
     */
    public function __construct(string $type, int $total, array $notifications)
    {
    }
    public function getType(): \PrestaShop\PrestaShop\Core\Domain\Notification\ValueObject\Type
    {
    }
    /**
     * @return int
     */
    public function getTotal(): int
    {
    }
    /**
     * @return NotificationResult[]
     */
    public function getNotifications(): array
    {
    }
}
