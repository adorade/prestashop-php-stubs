<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult;

class ShipmentForViewing
{
    public function __construct(int $id, ?string $trackingNumber, \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary $carrierSummary, \PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\ShippingAdressSummary $shippingAdressSummary)
    {
    }
    public function getId(): int
    {
    }
    public function setId(int $id): void
    {
    }
    public function getTrackingNumber(): ?string
    {
    }
    public function setTrackingNumber(?string $trackingNumber): void
    {
    }
    public function getCarrierSummary(): \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary
    {
    }
    public function setCarrierSummary(\PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary $carrierSummary): void
    {
    }
    public function getShippingAdressSummary(): \PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\ShippingAdressSummary
    {
    }
    public function setShippingAdressSummary(\PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\ShippingAdressSummary $shippingAdressSummary): void
    {
    }
}
