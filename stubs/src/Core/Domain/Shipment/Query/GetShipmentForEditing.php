<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Query;

/**
 * Get shipment for editing.
 */
class GetShipmentForEditing
{
    public function __construct(int $orderId, int $shipmentId)
    {
    }
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    public function getShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
}
