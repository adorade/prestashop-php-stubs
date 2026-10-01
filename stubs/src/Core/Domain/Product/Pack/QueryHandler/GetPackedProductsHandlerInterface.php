<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\QueryHandler;

/**
 * Defines contract for GetPackedProductsHandler
 */
interface GetPackedProductsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Pack\Query\GetPackedProducts $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Pack\QueryResult\PackedProductDetails[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\Query\GetPackedProducts $query): array;
}
