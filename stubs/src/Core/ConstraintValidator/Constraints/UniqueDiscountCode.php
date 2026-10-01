<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Validation constraint for making sure that a discount code isn't already used by another discount.
 */
class UniqueDiscountCode extends \Symfony\Component\Validator\Constraint
{
    public $message = 'The discount code is already used (conflict with discount "%s").';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
