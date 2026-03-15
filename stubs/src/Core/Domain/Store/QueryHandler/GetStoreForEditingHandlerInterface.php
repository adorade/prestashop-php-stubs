<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\QueryHandler;

interface GetStoreForEditingHandlerInterface
{
    /**
     * @param GetStoreForEditing $query
     *
     * @return StoreForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Query\GetStoreForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Store\QueryResult\StoreForEditing;
}
