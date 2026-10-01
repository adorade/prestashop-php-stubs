<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\QueryResult;

/**
 * Stores editable country data
 */
class CountryForEditing
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId
     * @param string[] $localisedNames
     * @param string $isoCode
     * @param int $callPrefix
     * @param int $defaultCurrency
     * @param int $zone
     * @param bool $needZipCode
     * @param ?string $zipCodeFormat
     * @param string $addressFormat
     * @param bool $enabled
     * @param bool $containsStates
     * @param bool $needIdNumber
     * @param bool $displayTaxLabel
     * @param int[] $shopAssociation
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId, array $localisedNames, string $isoCode, int $callPrefix, int $defaultCurrency, int $zone, bool $needZipCode, ?string $zipCodeFormat, string $addressFormat, bool $enabled, bool $containsStates, bool $needIdNumber, bool $displayTaxLabel, array $shopAssociation)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
     */
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return string
     */
    public function getIsoCode(): string
    {
    }
    /**
     * @return int
     */
    public function getCallPrefix(): int
    {
    }
    /**
     * @return int
     */
    public function getDefaultCurrency(): int
    {
    }
    /**
     * @return int
     */
    public function getZone(): int
    {
    }
    /**
     * @return bool
     */
    public function isNeedZipCode(): bool
    {
    }
    /**
     * @return ?\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryZipCodeFormat
     */
    public function getZipCodeFormat(): ?\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryZipCodeFormat
    {
    }
    /**
     * @return string
     */
    public function getAddressFormat(): string
    {
    }
    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
    }
    /**
     * @return bool
     */
    public function isContainsStates(): bool
    {
    }
    /**
     * @return bool
     */
    public function isNeedIdNumber(): bool
    {
    }
    /**
     * @return bool
     */
    public function isDisplayTaxLabel(): bool
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociation(): array
    {
    }
}
