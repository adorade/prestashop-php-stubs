<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Class DefaultLanguageValidator is responsilbe for doing the actual validation under DefaultLanguage constraint.
 */
class DefaultLanguageValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $defaultLanguageContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
