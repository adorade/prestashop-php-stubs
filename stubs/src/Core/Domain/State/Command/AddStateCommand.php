<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Command;

/**
 * Creates state with provided data
 */
class AddStateCommand
{
    /**
     * @param int $countryId
     * @param int $zoneId
     * @param string $name
     * @param string $isoCode
     * @param bool $active
     */
    public function __construct(int $countryId, int $zoneId, string $name, string $isoCode, bool $active)
    {
    }
    /**
     * @return CountryId
     */
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
    /**
     * @return ZoneId
     */
    public function getZoneId(): \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getIsoCode(): string
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
}
