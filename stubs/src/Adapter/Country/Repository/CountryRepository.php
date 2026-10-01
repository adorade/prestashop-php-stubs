<?php

namespace PrestaShop\PrestaShop\Adapter\Country\Repository;

/**
 * Provides methods to access data storage of Country
 */
final class CountryRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository implements \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepositoryInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Country\Validate\CountryValidator $countryValidator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryNotFoundException
     */
    public function assertCountryExists(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId
     *
     * @return \Country
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): \Country
    {
    }
    /**
     * @param \Country $country
     *
     * @return \Country
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\DuplicateCountryIsoCodeException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function add(\Country $country): \Country
    {
    }
    /**
     * @param \Country $country
     *
     * @return \Country
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CannotEditCountryException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\DuplicateCountryIsoCodeException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function update(\Country $country): \Country
    {
    }
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): void
    {
    }
}
