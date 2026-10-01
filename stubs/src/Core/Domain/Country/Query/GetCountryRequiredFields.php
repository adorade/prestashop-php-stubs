<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Query;

/**
 * Query for getting country required fields
 */
class GetCountryRequiredFields
{
    /**
     * @param int $countryId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryConstraintException
     */
    public function __construct(int $countryId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
     */
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
}
