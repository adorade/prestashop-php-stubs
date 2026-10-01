<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Maps rounding modes from legacy rounding modes values to the new PrestaShop/Decimal's Rounding constant values.
 */
final class RoundingMapper
{
    /**
     * Maps rounding modes from legacy rounding modes values to the new PrestaShop/Decimal's Rounding constant values.
     * eg. : asking mapping for PS_ROUND_UP (value : 0) would return Rounding::ROUND_CEIL (value : 'ceil').
     *
     * @param int $legacyRoundingMode
     *                                The legacy rounding mode value
     *
     * @return string
     *                The corresponding Rounding class' constant value
     */
    public static function mapRounding($legacyRoundingMode)
    {
    }
}
