<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult;

class ShipmentForViewing
{
    public function __construct(int $id, ?string $trackingNumber, \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary $carrierSummary, \PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\ShippingAdressSummary $shippingAdressSummary, bool $isDeleted)
    {
    }
    public function getId(): int
    {
    }
    public function isDeleted(): bool
    {
    }
    public function getTrackingNumber(): ?string
    {
    }
    public function getCarrierSummary(): \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary
    {
    }
    public function getShippingAdressSummary(): \PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\ShippingAdressSummary
    {
    }
}
