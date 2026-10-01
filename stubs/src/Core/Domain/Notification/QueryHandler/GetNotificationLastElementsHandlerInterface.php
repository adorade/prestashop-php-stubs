<?php

namespace PrestaShop\PrestaShop\Core\Domain\Notification\QueryHandler;

/**
 * Interface for service that handles notifications last elements request
 */
interface GetNotificationLastElementsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Notification\Query\GetNotificationLastElements $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Notification\QueryResult\NotificationsResults
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Notification\Query\GetNotificationLastElements $query): \PrestaShop\PrestaShop\Core\Domain\Notification\QueryResult\NotificationsResults;
}
