<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Command;

/**
 * Deletes stores on bulk action
 */
class BulkDeleteStoreCommand
{
    /**
     * @param array<int, int> $storeIds
     */
    public function __construct(array $storeIds)
    {
    }
    /**
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId>
     */
    public function getStoreIds(): array
    {
    }
}
