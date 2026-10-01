<?php

namespace PrestaShop\PrestaShop\Adapter\Country\Repository;

interface CountryRepositoryInterface
{
    public function assertCountryExists(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): void;
    public function get(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): \Country;
    public function add(\Country $country): \Country;
    public function update(\Country $country): \Country;
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): void;
}
