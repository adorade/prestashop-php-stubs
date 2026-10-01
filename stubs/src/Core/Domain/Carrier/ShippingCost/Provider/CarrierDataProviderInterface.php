<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider;

interface CarrierDataProviderInterface extends \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\ShippingCostProviderInterface
{
    public function getCarrierShippingData(int $carrierId): ?\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\CarrierShippingData;
    public function getRangeCost(\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\CarrierShippingData $carrierData, \PrestaShop\Decimal\DecimalNumber $totalWeight, \PrestaShop\Decimal\DecimalNumber $orderTotal, int $zoneId, int $currencyId): ?\PrestaShop\Decimal\DecimalNumber;
}
