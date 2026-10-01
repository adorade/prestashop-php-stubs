<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\QueryHandler;

interface GetStoreForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Store\Query\GetStoreForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Store\QueryResult\StoreForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Query\GetStoreForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Store\QueryResult\StoreForEditing;
}
