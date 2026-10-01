<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR;

/**
 * {@inheritdoc}
 */
final class ComputingPrecision implements \PrestaShop\PrestaShop\Core\Localization\CLDR\ComputingPrecisionInterface
{
    public const MULTIPLIER = 1;
    public const MINIMAL_VALUE = 0;
    /**
     * {@inheritdoc}
     */
    public function getPrecision(int $displayPrecision)
    {
    }
}
