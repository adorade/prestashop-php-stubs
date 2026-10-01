<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

/**
 * Search a list of combination that you can associate with, the query result contains minimum information
 * to display the product (the returned list can contain product which have no combinations).
 */
interface SearchCombinationsForAssociationHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\SearchCombinationsForAssociation $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationForAssociation[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\SearchCombinationsForAssociation $query): array;
}
