<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\QueryHandler;

/**
 * Defines contract for GetPackedProductsHandler
 */
interface GetPackedProductsHandlerInterface
{
    /**
     * @param GetPackedProducts $query
     *
     * @return PackedProductDetails[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\Query\GetPackedProducts $query): array;
}
