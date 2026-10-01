<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

class ValidAddressFormatValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Domain\Country\AddressFormat\AddressFormatCheckerInterface $checker)
    {
    }
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint): void
    {
    }
}
