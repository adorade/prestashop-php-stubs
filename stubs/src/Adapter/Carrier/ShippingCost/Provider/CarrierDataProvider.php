<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\ShippingCost\Provider;

class CarrierDataProvider implements \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\CarrierDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository)
    {
    }
    public function getCarrierShippingData(int $carrierId): ?\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\CarrierShippingData
    {
    }
    public function getRangeCost(\PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\CarrierShippingData $carrierData, \PrestaShop\Decimal\DecimalNumber $totalWeight, \PrestaShop\Decimal\DecimalNumber $orderTotal, int $zoneId, int $currencyId): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
}
