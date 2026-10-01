<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Validation constraint for making sure that a discount code isn't already used by another discount.
 */
class UniqueDiscountCodeValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository)
    {
    }
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint): void
    {
    }
}
