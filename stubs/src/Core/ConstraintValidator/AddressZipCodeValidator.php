<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Validator for address zip code value
 */
final class AddressZipCodeValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    /**
     * @param TranslatorInterface $translator
     * @param CountryZipCodeRequirementsProviderInterface $requirementsProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Country\CountryZipCodeRequirementsProviderInterface $requirementsProvider)
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
