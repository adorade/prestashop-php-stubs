<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Query;

/**
 * Gets country information for editing.
 */
class GetCountryForEditing
{
    /**
     * @param int $countryId
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
