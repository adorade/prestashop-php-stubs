<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Command;

/**
 * Toggles country status.
 */
final class ToggleCountryStatusCommand
{
    public function __construct(int $countryId)
    {
    }
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
}
