<?php

namespace PrestaShop\PrestaShop\Adapter\Notification\QueryHandler;

/**
 * Get employee last notification elements
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetNotificationLastElementsHandler implements \PrestaShop\PrestaShop\Core\Domain\Notification\QueryHandler\GetNotificationLastElementsHandlerInterface
{
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
