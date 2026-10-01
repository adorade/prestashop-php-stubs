<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Command;

class DeleteProductFromShipment
{
    public function __construct(int $shipmentId, int $orderDetailId)
    {
    }
    public function getShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
    public function getOrderDetailId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\OrderDetailId
    {
    }
}
