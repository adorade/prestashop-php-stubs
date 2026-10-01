<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Repository;

/**
 * Methods to access data source of Store
 */
class StoreRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId $storeId
     *
     * @return \Store
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Store\Exception\StoreNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId $storeId): \Store
    {
    }
    /**
     * @param \Store $store
     * @param array $propertiesToUpdate
     * @param int $errorCode
     */
    public function partialUpdate(\Store $store, array $propertiesToUpdate, int $errorCode): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId $storeId
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId $storeId): void
    {
    }
}
