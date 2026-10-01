<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Command;

class FulfillShipmentCommand
{
    public function __construct(int $shipmentId, string $trackingNumber)
    {
    }
    public function getShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
    public function getTrackingNumber(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\TrackingNumber
    {
    }
}
