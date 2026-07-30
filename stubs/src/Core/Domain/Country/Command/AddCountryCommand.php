<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Command;

/**
 * Adds new zone with provided data.
 */
class AddCountryCommand
{
    /**
     * @var string[]
     */
    protected $localizedNames;
    /**
     * @var string
     */
    protected $isoCode;
    /**
     * @var int
     */
    protected $callPrefix;
    /**
     * @var int
     */
    protected $defaultCurrency = 0;
    /**
     * @var ZoneId
     */
    protected $zoneId;
    /**
     * @var bool
     */
    protected $needZipCode = false;
    /**
     * @var ?CountryZipCodeFormat
     */
    protected $zipCodeFormat;
    /**
     * @var string
     */
    protected $addressFormat = '';
    /**
     * @var bool
     */
    protected $enabled = false;
    /**
     * @var bool
     */
    protected $containsStates = false;
    /**
     * @var bool
     */
    protected $needIdNumber = false;
    /**
     * @var bool
     */
    protected $displayTaxLabel = false;
    /**
     * @var int[]
     */
    protected $shopAssociation = [];
    public function __construct(array $localizedNames, string $isoCode, int $callPrefix, int $defaultCurrency, int $zoneId, bool $needZipCode, ?string $zipCodeFormat, string $addressFormat, bool $enabled, bool $containsStates, bool $needIdNumber, bool $displayTaxLabel, array $shopAssociation)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    public function getIsoCode()
    {
    }
    public function getCallPrefix(): int
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
