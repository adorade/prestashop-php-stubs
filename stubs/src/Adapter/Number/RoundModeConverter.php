<?php

namespace PrestaShop\PrestaShop\Adapter\Number;

class RoundModeConverter
{
    public const MODE_MAP = [PS_ROUND_UP => \PrestaShop\Decimal\Operation\Rounding::ROUND_CEIL, PS_ROUND_DOWN => \PrestaShop\Decimal\Operation\Rounding::ROUND_FLOOR, PS_ROUND_HALF_UP => \PrestaShop\Decimal\Operation\Rounding::ROUND_HALF_UP, PS_ROUND_HALF_DOWN => \PrestaShop\Decimal\Operation\Rounding::ROUND_HALF_DOWN, PS_ROUND_HALF_EVEN => \PrestaShop\Decimal\Operation\Rounding::ROUND_HALF_EVEN];
    /**
     * @param int $legacyRoundMode
     *
     * @return string
     *
     * @throws CoreException
     */
    public static function getNumberRoundMode(int $legacyRoundMode): string
    {
    }
}
