<?php

namespace PrestaShop\PrestaShop\Core\Country;

/**
 * Holds information about country zip code requirements
 */
class CountryZipCodeRequirements
{
    /**
     * @param bool $isRequired
     */
    public function __construct(bool $isRequired)
    {
    }
    /**
     * @return bool
     */
    public function isRequired(): bool
    {
    }
    /**
     * @return string|null
     */
    public function getPattern(): ?string
    {
    }
    /**
     * @param string $pattern
     * @param string $humanReadablePattern
     *
     * @return CountryZipCodeRequirements
     */
    public function setPatterns(string $pattern, string $humanReadablePattern): \PrestaShop\PrestaShop\Core\Country\CountryZipCodeRequirements
    {
    }
    /**
     * @return string|null
     */
    public function getHumanReadablePattern(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getCountryName(): ?string
    {
    }
    /**
     * @param string $countryName
     *
     * @return CountryZipCodeRequirements
     */
    public function setCountryName(string $countryName): \PrestaShop\PrestaShop\Core\Country\CountryZipCodeRequirements
    {
    }
}
