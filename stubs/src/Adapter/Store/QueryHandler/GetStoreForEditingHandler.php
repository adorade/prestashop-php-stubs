<?php

namespace PrestaShop\PrestaShop\Adapter\Store\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetStoreForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Store\QueryHandler\GetStoreForEditingHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Store\Repository\StoreRepository $storeRepository)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Store\Exception\StoreException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Query\GetStoreForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Store\QueryResult\StoreForEditing
    {
    }
}
