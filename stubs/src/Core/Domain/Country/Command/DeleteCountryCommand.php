<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Command;

/**
 * Deletes country
 */
class DeleteCountryCommand
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
