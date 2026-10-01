<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject;

class TrackingNumber
{
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\InvalidShipmentTrackingNumberException
     */
    public function __construct(string $trackingNumber)
    {
    }
    public function getValue(): string
    {
    }
}
