<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\QueryHandler;

/**
 * Defines contract for get country for editing handler
 */
interface GetCountryForEditingHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Query\GetCountryForEditing $command): \PrestaShop\PrestaShop\Core\Domain\Country\QueryResult\CountryForEditing;
}
