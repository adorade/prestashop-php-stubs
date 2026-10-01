<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Provides date range validation
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
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
