<?php

namespace PrestaShop\PrestaShop\Adapter\Country\QueryHandler;

/**
 * Handles and provides country state requirements
 */
final class GetCountryRequiredFieldsHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\QueryHandler\GetCountryRequiredFieldsHandlerInterface
{
    /**
     * @param CountryRequiredFieldsProviderInterface $requiredFieldsProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Country\CountryRequiredFieldsProviderInterface $requiredFieldsProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Query\GetCountryRequiredFields $query): \PrestaShop\PrestaShop\Core\Domain\Country\QueryResult\CountryRequiredFields
    {
    }
}
