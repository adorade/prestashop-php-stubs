<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler;

/**
 * Search a list of product that you can associate with, the query result contains minimum information
 * to display the product.
 */
interface SearchProductsForAssociationHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProductsForAssociation $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductForAssociation[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProductsForAssociation $query): array;
}
