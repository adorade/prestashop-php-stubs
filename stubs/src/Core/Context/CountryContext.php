<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * This context service gives access to all contextual data related to country.
 */
class CountryContext
{
    public function __construct(protected int $id, protected int $zoneId, protected int $currencyId, protected string $isoCode, protected int $callPrefix, protected string $name, protected bool $containsStates, protected bool $identificationNumberNeeded, protected bool $zipCodeNeeded, protected string $zipCodeFormat, protected bool $taxLabelDisplayed)
    {
    }
    public function getId(): int
    {
    }
    public function getZoneId(): int
    {
    }
    public function getCurrencyId(): int
    {
    }
    public function getIsoCode(): string
    {
    }
    public function getCallPrefix(): int
    {
    }
    public function getName(): string
    {
    }
    public function containsStates(): bool
    {
    }
    public function isIdentificationNumberNeeded(): bool
    {
    }
    public function isZipCodeNeeded(): bool
    {
    }
    public function getZipCodeFormat(): string
    {
    }
    public function isTaxLabelDisplayed(): bool
    {
    }
}
