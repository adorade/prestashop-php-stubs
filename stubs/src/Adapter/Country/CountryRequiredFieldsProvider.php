<?php

namespace PrestaShop\PrestaShop\Adapter\Country;

class CountryRequiredFieldsProvider implements \PrestaShop\PrestaShop\Core\Country\CountryRequiredFieldsProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider $countryDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryNotFoundException
     */
    public function isStatesRequired(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): bool
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryNotFoundException
     */
    public function isDniRequired(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): bool
    {
    }
}
