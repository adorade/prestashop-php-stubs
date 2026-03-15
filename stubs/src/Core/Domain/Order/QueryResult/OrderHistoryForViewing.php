<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderHistoryForViewing
{
    /**
     * @param int $currentOrderStatusId
     * @param OrderStatusForViewing[] $statuses
     */
    public function __construct(int $currentOrderStatusId, array $statuses)
    {
    }
    /**
     * @return OrderStatusForViewing[]
     */
    public function getStatuses(): array
    {
    }
    /**
     * @return int
     */
    public function getCurrentOrderStatusId(): int
    {
    }
}
