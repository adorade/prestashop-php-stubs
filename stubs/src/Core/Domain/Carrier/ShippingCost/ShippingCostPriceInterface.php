<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost;

/**
 * Mutable DTO carrying all state through the shipping cost calculation pipeline.
 */
interface ShippingCostPriceInterface
{
    public function getPhysicalProducts(): array;
    public function getCarrierId(): int;
    public function getAddressId(): ?int;
    public function getCurrencyId(): int;
    public function getOrderTotal(): \PrestaShop\Decimal\DecimalNumber;
    public function getCountryZoneId(): int;
    public function getTotalWeight(): \PrestaShop\Decimal\DecimalNumber;
    public function setTotalWeight(\PrestaShop\Decimal\DecimalNumber $totalWeight): void;
    public function getResolvedZoneId(): ?int;
    public function setResolvedZoneId(int $zoneId): void;
    public function getCarrierData(): ?\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\CarrierShippingData;
    public function setCarrierData(\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\CarrierShippingData $carrierData): void;
    public function isFreeShipping(): bool;
    public function setFreeShipping(bool $isFreeShipping): void;
    public function getCost(): \PrestaShop\Decimal\DecimalNumber;
    public function setCost(\PrestaShop\Decimal\DecimalNumber $cost): void;
    public function isAvailable(): bool;
    public function setAvailable(bool $isAvailable): void;
    public function getTaxExcluded(): ?\PrestaShop\Decimal\DecimalNumber;
    public function setTaxExcluded(\PrestaShop\Decimal\DecimalNumber $taxExcluded): void;
    public function getTaxIncluded(): ?\PrestaShop\Decimal\DecimalNumber;
    public function setTaxIncluded(\PrestaShop\Decimal\DecimalNumber $taxIncluded): void;
    public function getPrecision(): ?int;
    public function setPrecision(int $precision): void;
}
