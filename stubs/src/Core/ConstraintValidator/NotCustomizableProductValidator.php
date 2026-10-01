<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

class NotCustomizableProductValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
