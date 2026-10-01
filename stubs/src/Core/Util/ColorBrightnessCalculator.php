<?php

namespace PrestaShop\PrestaShop\Core\Util;

/**
 * Calculates color brightness
 */
final class ColorBrightnessCalculator
{
    /**
     * Minimum color value after which it's considered bright
     */
    public const BRIGHT_COLOR_MIN = 130;
    /**
     * @param string $hexColor
     *
     * @return bool
     */
    public function isBright($hexColor)
    {
    }
}
