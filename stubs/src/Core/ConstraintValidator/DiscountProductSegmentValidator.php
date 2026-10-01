<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

class DiscountProductSegmentValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function validate(mixed $value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
