<?php

namespace PrestaShopBundle\Form\DataTransformer;

/**
 * Transforms between a normalized format and a localized money string.
 * (Copy from Symfony/Component/Form/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformer.php to add $locale in it!)
 */
class MoneyToLocalizedStringTransformer extends \Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer
{
    public function __construct(?int $scale = 2, ?bool $grouping = true, ?int $roundingMode = self::ROUND_HALF_UP, ?int $divisor = 1, string $locale = null)
    {
    }
    /**
     * Transforms a normalized format into a localized money string.
     *
     * @param int|float|null $value Normalized number
     *
     * @return string Localized money string
     *
     * @throws TransformationFailedException if the given value is not numeric or
     *                                       if the value can not be transformed
     */
    public function transform($value)
    {
    }
    /**
     * Transforms a localized money string into a normalized format.
     *
     * @param string $value Localized money string
     *
     * @return int|float|null Normalized number
     *
     * @throws TransformationFailedException if the given value is not a string
     *                                       or if the value can not be transformed
     */
    public function reverseTransform($value)
    {
    }
}
