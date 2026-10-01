<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Query;

/**
 * Get shipments for order.
 */
class GetOrderShipments
{
    public function __construct(int $orderId, bool $includeDeleted = false)
    {
    }
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    public function includeDeleted(): bool
    {
    }
}
