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
     * @param \PrestaShop\PrestaShop\Adapter\Admin\NotificationsConfiguration $notificationsConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Admin\NotificationsConfiguration $notificationsConfiguration)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Notification\Query\GetNotificationLastElements $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Notification\QueryResult\NotificationsResults
     *
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Notification\Query\GetNotificationLastElements $query): \PrestaShop\PrestaShop\Core\Domain\Notification\QueryResult\NotificationsResults
    {
    }
}
