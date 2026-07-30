<?php

namespace PrestaShop\PrestaShop\Core\Domain\Notification\QueryHandler;

/**
 * Interface for service that handles notifications last elements request
 */
interface GetNotificationLastElementsHandlerInterface
{
    /**
     * @param GetNotificationLastElements $query
     *
     * @return NotificationsResults
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Notification\Query\GetNotificationLastElements $query): \PrestaShop\PrestaShop\Core\Domain\Notification\QueryResult\NotificationsResults;
}
