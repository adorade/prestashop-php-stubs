<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Updates order status.
 */
class UpdateOrderStatusCommand
{
    /**
     * @param int $orderId
     * @param int $newOrderStatusId
     */
    public function __construct($orderId, $newOrderStatusId)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return int
     */
    public function getNewOrderStatusId()
    {
    }
}
