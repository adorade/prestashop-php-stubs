<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Validates discount amount with the nested value structure:
 * ['type' => ..., 'value' => ['amount' => ..., 'currency' => ...], 'include_tax' => ...]
 */
class DiscountAmountValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint): void
    {
    }
}
