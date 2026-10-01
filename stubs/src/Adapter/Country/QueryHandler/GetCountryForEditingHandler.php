<?php

namespace PrestaShop\PrestaShop\Adapter\Country\QueryHandler;

/**
 * Handles editable country query
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetCountryForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\QueryHandler\GetCountryForEditingHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Query\GetCountryForEditing $command): \PrestaShop\PrestaShop\Core\Domain\Country\QueryResult\CountryForEditing
    {
    }
}
