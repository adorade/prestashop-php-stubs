<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Validation constraint for checking if customer with given email exists in current shop context
 */
class ExistingCustomerEmail extends \Symfony\Component\Validator\Constraint
{
    public $message = 'This email address is not registered.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
