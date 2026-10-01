<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\DataTransformer;

/**
 * The purpose of this transformer is to display the disabling value of fixed price -1 into an empty string, but since
 * the field is a MoneyType it already has a money type transformer which causes some bugs because the value is already
 * converted for current locale and the format is not compatible with DecimalNumber which is used by InitialPrice.
 */
class SpecificPriceFixedPriceTransformer implements \Symfony\Component\Form\DataTransformerInterface
{
    public function __construct(int $scale = null, ?bool $grouping = false, ?int $roundingMode = \Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer::ROUND_HALF_UP)
    {
    }
    public function transform($fixedPriceLocalizedValue)
    {
    }
    public function reverseTransform($fixedPriceViewValue)
    {
    }
}
