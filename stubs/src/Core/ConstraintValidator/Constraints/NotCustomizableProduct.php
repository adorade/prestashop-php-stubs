<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Validation constraint for making sure that the selected product isn't customizable.
 */
class NotCustomizableProduct extends \Symfony\Component\Validator\Constraint
{
    public $message = 'Customizable product cannot be selected.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
