<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Address zip code validation constraint
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class AddressZipCode extends \Symfony\Component\Validator\Constraint
{
    public $requiredMessage = 'A Zip/Postal code is required.';
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
