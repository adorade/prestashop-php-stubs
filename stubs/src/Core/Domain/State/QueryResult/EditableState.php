<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\QueryResult;

/**
 * Transfers state data for editing
 */
class EditableState
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId $stateId
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId
     * @param \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId $zoneId
     * @param string $name
     * @param string $isoCode
     * @param bool $enabled
     * @param array<int, int> $associatedShops
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId $stateId, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId, \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId $zoneId, string $name, string $isoCode, bool $enabled, array $associatedShops)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId
     */
    public function getStateId(): \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
     */
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId
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
    public function isEnabled(): bool
    {
    }
    /**
     * @return array<int, int>
     */
    public function getAssociatedShops(): array
    {
    }
}
