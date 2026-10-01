<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Class CustomerName is responsible of validating customer name according to several patterns.
 */
final class CustomerName extends \Symfony\Component\Validator\Constraint
{
    public $message = 'The %s field is invalid.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
