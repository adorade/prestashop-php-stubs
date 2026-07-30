<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Constraint for validating reduction
 */
final class Reduction extends \Symfony\Component\Validator\Constraint
{
    public $invalidTypeMessage = 'Reduction type "%type%" is invalid. Allowed types are: %types%.';
    public $invalidAmountValueMessage = 'Reduction value "%value%" is invalid. It must be greater than 0.';
    public $invalidPercentageValueMessage = 'Reduction value "%value%" is invalid. Value must be more than zero and maximum %max%.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
