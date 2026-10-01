<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Query;

/**
 * Get shipments for order.
 */
class GetOrderShipments
{
    public function __construct(int $orderId)
    {
    }
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
}
