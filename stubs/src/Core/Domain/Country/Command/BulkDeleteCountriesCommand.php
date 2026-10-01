<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Command;

/**
 * Deletes countries on bulk action.
 */
final class BulkDeleteCountriesCommand
{
    /**
     * @param array<int, int> $countryIds
     */
    public function __construct(array $countryIds)
    {
    }
    /**
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId>
     */
    public function getCountryIds(): array
    {
    }
}
