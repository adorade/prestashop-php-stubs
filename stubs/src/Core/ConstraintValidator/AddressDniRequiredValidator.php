<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Validates address DNI according to the country value and fields requirement
 */
class AddressDniRequiredValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    /**
     * @param CountryRequiredFieldsProviderInterface $countryRequiredFieldsProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Country\CountryRequiredFieldsProviderInterface $countryRequiredFieldsProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
