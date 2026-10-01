<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

class NotBlankWhenRequiredValidator extends \Symfony\Component\Validator\Constraints\NotBlankValidator
{
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
