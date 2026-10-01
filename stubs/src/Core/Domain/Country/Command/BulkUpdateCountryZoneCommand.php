<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Command;

/**
 * Updates zone for given countries.
 */
final class BulkUpdateCountryZoneCommand
{
    /**
     * @param int[] $countryIds
     */
    public function __construct(array $countryIds, int $newZoneId)
    {
    }
    /**
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId>
     */
    public function getCountryIds(): array
    {
    }
    public function getNewZoneId(): int
    {
    }
}
