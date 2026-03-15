<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

class CancelOrderProductCommand
{
    /**
     * CancelOrderProductCommand constructor.
     *
     * @param array $cancelledProducts
     * @param int $orderId
     */
    public function __construct(array $cancelledProducts, int $orderId)
    {
    }
    /**
     * @return array
     */
    public function getCancelledProducts()
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId()
    {
    }
}
