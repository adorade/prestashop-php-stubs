<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Validation constraint for address DNI according to the country value and fields requirement
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class AddressDniRequired extends \Symfony\Component\Validator\Constraint
{
    public $message = 'This field cannot be empty.';
    public $id_country;
    public $required;
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
    public function getRequiredOptions()
    {
    }
}
