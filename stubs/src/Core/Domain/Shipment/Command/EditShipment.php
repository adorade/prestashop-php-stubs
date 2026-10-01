<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Command;

class EditShipment
{
    public function __construct(int $shipmentId, int $carrierId)
    {
    }
    public function getShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
