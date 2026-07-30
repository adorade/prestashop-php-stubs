<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Validates address state choice by selected country value
 */
class AddressStateRequiredValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    /**
     * @param CountryRequiredFieldsProviderInterface $countryRequiredFieldsProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Country\CountryRequiredFieldsProviderInterface $countryRequiredFieldsProvider)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CountryConstraintException
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
