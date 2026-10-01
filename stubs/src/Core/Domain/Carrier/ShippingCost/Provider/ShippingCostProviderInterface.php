<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider;

/**
 * Marker interface for all shipping cost data providers.
 * Each provider is responsible for a single business concern
 * (zone resolution, carrier data, free shipping thresholds, range cost, tax rate).
 */
interface ShippingCostProviderInterface
{
}
