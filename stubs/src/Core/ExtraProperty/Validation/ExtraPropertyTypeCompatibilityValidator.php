<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Validation;

/**
 * Dependency-free on purpose: instantiable by every validator, including the hand-built
 * front-office one (ValidatorBuilderExtension) and Validation::createValidator() in tests.
 */
final class ExtraPropertyTypeCompatibilityValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function validate(mixed $value, \Symfony\Component\Validator\Constraint $constraint): void
    {
    }
}
