<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler;

/**
 * Defines contract for GetProductForEditingHandler
 */
interface GetProductForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Query\GetProductForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductForEditing
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductShopAssociationNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\GetProductForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductForEditing;
}
