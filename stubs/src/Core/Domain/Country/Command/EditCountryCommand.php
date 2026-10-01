<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Command;

/**
 * Adds new zone with provided data.
 */
class EditCountryCommand
{
    public function __construct(int $countryId)
    {
    }
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
     * @param string[] $localizedNames
     *
     * @return EditCountryCommand
     */
    public function setLocalizedNames(array $localizedNames): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function getIsoCode(): ?string
    {
    }
    public function setIsoCode($isoCode)
    {
    }
    public function getCallPrefix(): ?int
    {
    }
    public function setCallPrefix(int $callPrefix): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function getDefaultCurrency(): ?int
    {
    }
    public function setDefaultCurrency(int $defaultCurrency): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function getZoneId(): ?int
    {
    }
    public function setZoneId(?int $zoneId): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function needZipCode(): ?bool
    {
    }
    public function setNeedZipCode(bool $needZipCode): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function getZipCodeFormat(): ?\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryZipCodeFormat
    {
    }
    public function setZipCodeFormat(?string $zipCodeFormat): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function getAddressFormat(): ?string
    {
    }
    public function setAddressFormat(string $addressFormat): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function isEnabled(): ?bool
    {
    }
    public function setEnabled(bool $enabled): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function containsStates(): ?bool
    {
    }
    public function setContainsStates(bool $containsStates): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function needIdNumber(): ?bool
    {
    }
    public function setNeedIdNumber(bool $needIdNumber): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    public function displayTaxLabel(): ?bool
    {
    }
    /**
     * @param bool $displayTaxLabel
     *
     * @return EditCountryCommand
     */
    public function setDisplayTaxLabel(bool $displayTaxLabel): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
    /**
     * @return ?int[]
     */
    public function getShopAssociation(): ?array
    {
    }
    /**
     * @param int[] $shopAssociation
     *
     * @return EditCountryCommand
     */
    public function setShopAssociation(array $shopAssociation): \PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand
    {
    }
}
