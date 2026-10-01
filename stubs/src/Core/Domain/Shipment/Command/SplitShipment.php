<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Command;

class SplitShipment
{
    public function __construct(int $shipmentId, array $orderDetailQuantity, int $carrierId)
    {
    }
    public function getShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
    public function getOrderDetailQuantity(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\OrderDetailQuantity
    {
    }
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
