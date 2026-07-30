<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Validator for checking if customer with given email exists in current shop context
 */
final class ExistingCustomerEmailValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    /**
     * @param CustomerDataSourceInterface $customerDataSource
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Customer\CustomerDataSourceInterface $customerDataSource)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
