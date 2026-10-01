<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Provider;

/**
 * Value object holding the carrier configuration data needed for shipping cost calculation.
 */
final class CarrierShippingData
{
    public function __construct(private readonly int $carrierId, private readonly int $shippingMethod, private readonly int $rangeBehavior, private readonly bool $hasShippingHandling, private readonly bool $isFreeShippingMethod)
    {
    }
    public function getCarrierId(): int
    {
    }
    public function getShippingMethod(): int
    {
    }
    public function getRangeBehavior(): int
    {
    }
    public function hasShippingHandling(): bool
    {
    }
    public function isFreeShippingMethod(): bool
    {
    }
}
