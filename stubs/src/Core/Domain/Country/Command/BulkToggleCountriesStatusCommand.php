<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Command;

/**
 * Toggles countries status on bulk action.
 */
final class BulkToggleCountriesStatusCommand
{
    /**
     * @param array<int, int> $countryIds
     */
    public function __construct(bool $expectedStatus, array $countryIds)
    {
    }
    public function getExpectedStatus(): bool
    {
    }
    /**
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId>
     */
    public function getCountryIds(): array
    {
    }
}
