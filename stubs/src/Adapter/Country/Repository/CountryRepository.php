<?php

namespace PrestaShop\PrestaShop\Adapter\Country\Repository;

/**
 * Provides methods to access data storage of Country
 */
class CountryRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param CountryId $countryId
     *
     * @throws CountryNotFoundException
     */
    public function assertCountryExists(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): void
    {
    }
}
