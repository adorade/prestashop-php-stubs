<?php

namespace PrestaShop\PrestaShop\Adapter\Validator;

/**
 * A constraint validator that does nothing.
 *
 * Returned by GracefulConstraintValidatorFactory when a constraint's real validator cannot be built in the current
 * (front-office legacy) container — so an un-buildable constraint is skipped rather than fataling. The constraint is
 * still fully enforced wherever the full Symfony container runs (back-office Symfony pages and the Admin API).
 */
final class NoOpConstraintValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function validate(mixed $value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
