<?php

namespace PrestaShop\PrestaShop\Adapter\Notification\QueryHandler;

/**
 * Get employee last notification elements
 *
 * @internal
 */
final class GetNotificationLastElementsHandler implements \PrestaShop\PrestaShop\Core\Domain\Notification\QueryHandler\GetNotificationLastElementsHandlerInterface
{
    /**
     * @param NotificationsConfiguration $notificationsConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Admin\NotificationsConfiguration $notificationsConfiguration)
    {
    }
    /**
     * @param GetNotificationLastElements $query
     *
     * @return NotificationsResults
     *
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Notification\Query\GetNotificationLastElements $query): \PrestaShop\PrestaShop\Core\Domain\Notification\QueryResult\NotificationsResults
    {
    }
}
