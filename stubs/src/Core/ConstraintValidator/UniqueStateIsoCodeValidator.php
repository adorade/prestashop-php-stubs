<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Validator for checking if state with ISO Code doesn't exist in current shop context
 */
class UniqueStateIsoCodeValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
