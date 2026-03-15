<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler;

/**
 * Defines contract to handle @see GetRelatedProducts query
 */
interface GetRelatedProductsHandlerInterface
{
    /**
     * @param GetRelatedProducts $query
     *
     * @return RelatedProduct[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\GetRelatedProducts $query): array;
}
