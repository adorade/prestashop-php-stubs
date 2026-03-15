<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler;

/**
 * Defines contract for GetProductForEditingHandler
 */
interface GetProductForEditingHandlerInterface
{
    /**
     * @param GetProductForEditing $query
     *
     * @return ProductForEditing
     *
     * @throws ProductNotFoundException
     * @throws ProductShopAssociationNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\GetProductForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductForEditing;
}
