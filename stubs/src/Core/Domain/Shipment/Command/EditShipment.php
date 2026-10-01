<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Command;

class EditShipment
{
    public function __construct(int $shipmentId, string $trackingNumber, int $carrierId)
    {
    }
    public function getShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
    public function getTrackingNumber(): string
    {
    }
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
