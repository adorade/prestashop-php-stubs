<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Rounding;

/**
 * Reads PS_PRICE_ROUND_MODE from configuration and delegates to DecimalNumber::toPrecision().
 * In Phase 1 the default precision is 0 (round to integers).
 */
class RoundingService implements \PrestaShop\PrestaShop\Core\Pricing\Rounding\RoundingServiceInterface
{
    /**
     * Maps PrestaShop PS_PRICE_ROUND_MODE config values to DecimalNumber rounding modes.
     *
     * 0 = Round up away from zero when half way
     * 1 = Round down towards zero when half way
     * 2 = Round towards the next even value
     * 3 = Round up to the nearest value
     * 4 = Round down to the nearest value
     * 5 = Truncate
     */
    protected const ROUNDING_MODE_MAP = [0 => \PrestaShop\Decimal\Operation\Rounding::ROUND_HALF_UP, 1 => \PrestaShop\Decimal\Operation\Rounding::ROUND_HALF_DOWN, 2 => \PrestaShop\Decimal\Operation\Rounding::ROUND_HALF_EVEN, 3 => \PrestaShop\Decimal\Operation\Rounding::ROUND_CEIL, 4 => \PrestaShop\Decimal\Operation\Rounding::ROUND_FLOOR, 5 => \PrestaShop\Decimal\Operation\Rounding::ROUND_TRUNCATE];
    protected readonly string $roundingMode;
    public function __construct(int $legacyRoundMode = 0)
    {
    }
    public function round(\PrestaShop\Decimal\DecimalNumber $value, ?int $precision = null): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
