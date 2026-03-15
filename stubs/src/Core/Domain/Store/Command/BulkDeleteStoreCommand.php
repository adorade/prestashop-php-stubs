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
     * @return array<int, StoreId>
     */
    public function getStoreIds(): array
    {
    }
}
