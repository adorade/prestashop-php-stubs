<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Validation constraint for address state choice by selected country value
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class AddressStateRequired extends \Symfony\Component\Validator\Constraint
{
    public $message = 'An address located in a country containing states must have a state selected.';
    public $id_country;
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
