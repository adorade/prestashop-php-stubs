<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Validation constraint for making sure there are no HTML or PHP tags to be removed by strip_tags
 */
class NoTagsValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint): void
    {
    }
}
