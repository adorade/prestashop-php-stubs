<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Class CustomerNameValidator is responsible for doing the actual validation under the CustomerName constraint.
 */
class CustomerNameValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public const PATTERN_NAME = '/^(?!\s*$)(?:[^0-9!<>,;?=+()\/\\\\@#"°*`{}_^$%:¤\[\]|\.。]|[。\.](?:\s|$))*$/u';
    public const PATTERN_DOT_SPACED = '/[\.。](\s{1}[^\ ]|$)/';
    /**
     * {@inheritdoc}
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
