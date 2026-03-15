<?php

namespace PrestaShop\PrestaShop\Core\Country;

interface CountryZipCodeRequirementsProviderInterface
{
    /**
     * @param CountryId $countryId
     *
     * @return CountryZipCodeRequirements
     */
    public function getCountryZipCodeRequirements(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): \PrestaShop\PrestaShop\Core\Country\CountryZipCodeRequirements;
}
