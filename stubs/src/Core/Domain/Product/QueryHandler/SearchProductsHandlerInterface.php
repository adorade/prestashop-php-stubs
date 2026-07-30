<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler;

/**
 * Interface for handling SearchProducts query
 */
interface SearchProductsHandlerInterface
{
    /**
     * @param SearchProducts $query
     *
     * @return FoundProduct[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProducts $query): array;
}
