<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Product\Command;

/**
 * Deletes product from given order.
 */
class DeleteProductFromOrderCommand
{
    /**
     * @param int $orderId
     * @param int $orderDetailId
     */
    public function __construct($orderId, $orderDetailId)
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
    public function getOrderDetailId()
    {
    }
}
