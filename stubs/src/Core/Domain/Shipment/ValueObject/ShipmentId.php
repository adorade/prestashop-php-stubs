<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject;

/**
 * Class ShipmentId
 */
class ShipmentId
{
    /**
     * @param int $shipmentId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\ShipmentException
     */
    public function __construct(int $shipmentId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
