<?php

namespace PrestaShop\PrestaShop\Core\Country;

interface CountryRequiredFieldsProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId
     *
     * @return bool
     */
    public function isStatesRequired(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): bool;
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId
     *
     * @return bool
     */
    public function isDniRequired(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): bool;
}
