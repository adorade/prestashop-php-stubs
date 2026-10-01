<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Constraint for validating discount amount (adapted for the nested value structure).
 */
class DiscountAmount extends \Symfony\Component\Validator\Constraint
{
    public string $invalidTypeMessage = 'Reduction type "%type%" is invalid. Allowed types are: %types%.';
    public string $invalidAmountValueMessage = 'Reduction value "%value%" is invalid. It must be greater than 0.';
    public string $invalidPercentageValueMessage = 'Reduction value "%value%" is invalid. Value must be more than zero and maximum %max%.';
    public function validatedBy(): string
    {
    }
}
