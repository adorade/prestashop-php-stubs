<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

class ResendOrderEmailCommand
{
    public function __construct(int $orderId, int $orderStatusId, int $orderHistoryId)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    /**
     * @return int
     */
    public function getOrderStatusId(): int
    {
    }
    /**
     * @return int
     */
    public function getOrderHistoryId(): int
    {
    }
}
