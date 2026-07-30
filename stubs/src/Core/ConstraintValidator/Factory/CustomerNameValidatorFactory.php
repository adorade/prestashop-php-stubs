<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Factory;

class CustomerNameValidatorFactory implements \Symfony\Component\Validator\ConstraintValidatorFactoryInterface
{
    /**
     * @param Constraint $constraint
     *
     * @return ConstraintValidatorInterface
     */
    public function getInstance(\Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
