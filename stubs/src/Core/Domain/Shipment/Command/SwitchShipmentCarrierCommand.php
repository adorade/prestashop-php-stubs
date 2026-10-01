<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Command;

class SwitchShipmentCarrierCommand
{
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\ShipmentException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierConstraintException
     */
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
