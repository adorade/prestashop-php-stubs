<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Repository;

/**
 * Methods to access data source of Store
 */
class StoreRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param StoreId $storeId
     *
     * @return Store
     *
     * @throws CoreException
     * @throws StoreNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId $storeId): \Store
    {
    }
    /**
     * @param Store $store
     * @param array $propertiesToUpdate
     * @param int $errorCode
     */
    public function partialUpdate(\Store $store, array $propertiesToUpdate, int $errorCode): void
    {
    }
    /**
     * @param StoreId $storeId
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId $storeId): void
    {
    }
}
