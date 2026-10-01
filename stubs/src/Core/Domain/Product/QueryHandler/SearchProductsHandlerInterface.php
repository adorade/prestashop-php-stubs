<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler;

/**
 * Interface for handling SearchProducts query
 */
interface SearchProductsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProducts $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\FoundProduct[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProducts $query): array;
}
