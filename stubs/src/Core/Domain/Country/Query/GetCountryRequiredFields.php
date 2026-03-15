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
     * @throws CountryConstraintException
     */
    public function __construct(int $countryId)
    {
    }
    /**
     * @return CountryId
     */
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
}
