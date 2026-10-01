<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Command;

/**
 * Deletes country
 */
class DeleteCountryCommand
{
    public function __construct(int $countryId)
    {
    }
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
}
