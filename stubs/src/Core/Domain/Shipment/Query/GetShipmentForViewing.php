<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Query;

/**
 * Get shipments for viewing.
 */
class GetShipmentForViewing
{
    public function __construct(int $shipmentId)
    {
    }
    public function getShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
}
