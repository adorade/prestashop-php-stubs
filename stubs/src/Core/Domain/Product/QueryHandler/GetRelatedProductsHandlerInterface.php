<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler;

/**
 * Defines contract to handle @see GetRelatedProducts query
 */
interface GetRelatedProductsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Query\GetRelatedProducts $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\RelatedProduct[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\GetRelatedProducts $query): array;
}
