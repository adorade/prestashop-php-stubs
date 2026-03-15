<?php

namespace PrestaShopBundle\Twig\Extension;

/**
 * Adds color calculation functions to Twig.
 */
class ColorBrightnessCalculatorExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * @param ColorBrightnessCalculator $brightnessCalculator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Util\ColorBrightnessCalculator $brightnessCalculator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
    }
}
