<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Provides date range validation
 */
class DateRange extends \Symfony\Component\Validator\Constraint
{
    public $message = 'The selected date range is not valid.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
