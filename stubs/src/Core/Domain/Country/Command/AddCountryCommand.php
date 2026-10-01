<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Command;

/**
 * Adds new zone with provided data.
 */
class AddCountryCommand
{
    /**
     * @param string[] $localizedNames
     * @param int[] $shopAssociation
     */
    public function __construct(private array $localizedNames, string $isoCode, int $callPrefix, private int $defaultCurrency, int $zoneId, private bool $needZipCode, ?string $zipCodeFormat, private string $addressFormat, private bool $enabled, private bool $containsStates, private bool $needIdNumber, private bool $displayTaxLabel, private array $shopAssociation)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    public function getIsoCode(): string
    {
    }
    public function getCallPrefix(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CallPrefix
    {
    }
    public function getDefaultCurrency(): int
    {
    }
    public function getZoneId(): \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId
    {
    }
    public function needZipCode(): bool
    {
    }
    public function getZipCodeFormat(): ?\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryZipCodeFormat
    {
    }
    public function getAddressFormat(): string
    {
    }
    public function isEnabled(): bool
    {
    }
    public function containsStates(): bool
    {
    }
    public function needIdNumber(): bool
    {
    }
    public function displayTaxLabel(): bool
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociation(): array
    {
    }
}
