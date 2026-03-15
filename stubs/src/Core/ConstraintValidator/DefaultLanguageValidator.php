<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Class DefaultLanguageValidator is responsilbe for doing the actual validation under DefaultLanguage constraint.
 */
class DefaultLanguageValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    /**
     * @param int $defaultLanguageId
     */
    public function __construct($defaultLanguageId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
