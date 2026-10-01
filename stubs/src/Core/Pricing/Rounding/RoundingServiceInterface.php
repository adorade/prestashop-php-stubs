<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Rounding;

/**
 * Centralised rounding service. Only injected into rounding calculators —
 * no other calculator should round values directly.
 */
interface RoundingServiceInterface
{
    public function round(\PrestaShop\Decimal\DecimalNumber $value, ?int $precision = null): \PrestaShop\Decimal\DecimalNumber;
}
