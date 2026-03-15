<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

interface SearchProductCombinationsHandlerInterface
{
    /**
     * @param SearchProductCombinations $query
     *
     * @return ProductCombinationsCollection
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\SearchProductCombinations $query): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\ProductCombinationsCollection;
}
