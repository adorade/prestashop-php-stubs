<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\QueryHandler;

/**
 * Defines contract for country required fields handler
 */
interface GetCountryRequiredFieldsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\Query\GetCountryRequiredFields $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Country\QueryResult\CountryRequiredFields
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Query\GetCountryRequiredFields $query): \PrestaShop\PrestaShop\Core\Domain\Country\QueryResult\CountryRequiredFields;
}
