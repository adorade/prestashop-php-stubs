<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Constraint for validating if value is not negative and is not zero
 */
class PositiveOrZero extends \Symfony\Component\Validator\Constraint
{
    public $message = 'This value should be either positive or zero.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
