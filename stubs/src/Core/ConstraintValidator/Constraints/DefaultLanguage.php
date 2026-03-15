<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Class DefaultLanguage is responsible for checking if the array contains default language id - its common to require
 * default language to be presented when saving required multi-language fields.
 */
class DefaultLanguage extends \Symfony\Component\Validator\Constraint
{
    public $message = 'The field %field_name% is required at least in your default language.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
