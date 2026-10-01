<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Query;

/**
 * Get shipment.
 */
class GetShipmentProducts
{
    public function __construct(int $shipmentId)
    {
    }
    public function getShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
}
