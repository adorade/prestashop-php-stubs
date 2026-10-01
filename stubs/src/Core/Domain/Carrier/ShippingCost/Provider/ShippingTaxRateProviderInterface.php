<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider;

/**
 * Provides the applicable tax rate for a given carrier and delivery address.
 */
interface ShippingTaxRateProviderInterface extends \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider\ShippingCostProviderInterface
{
    public function getTaxRate(int $carrierId, int $addressId): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate;
}
