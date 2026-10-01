<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\ShippingCost\Provider;

class ShippingTaxRateProvider implements \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\ShippingTaxRateProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private readonly \PrestaShop\PrestaShop\Adapter\Address\Repository\AddressRepository $addressRepository, private readonly ?\Psr\Log\LoggerInterface $logger = null)
    {
    }
    public function getTaxRate(int $carrierId, int $addressId): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate
    {
    }
}
