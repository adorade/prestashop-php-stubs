<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

interface SearchProductCombinationsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\SearchProductCombinations $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\ProductCombinationsCollection
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\SearchProductCombinations $query): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\ProductCombinationsCollection;
}
