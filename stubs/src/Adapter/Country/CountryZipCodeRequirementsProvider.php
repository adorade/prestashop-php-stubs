<?php

namespace PrestaShop\PrestaShop\Adapter\Country;

final class CountryZipCodeRequirementsProvider implements \PrestaShop\PrestaShop\Core\Country\CountryZipCodeRequirementsProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $context
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\ZipCodePatternResolver $patternResolver
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $context, \PrestaShop\PrestaShop\Core\Domain\Country\ZipCodePatternResolver $patternResolver)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryNotFoundException
     */
    public function getCountryZipCodeRequirements(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): \PrestaShop\PrestaShop\Core\Country\CountryZipCodeRequirements
    {
    }
}
