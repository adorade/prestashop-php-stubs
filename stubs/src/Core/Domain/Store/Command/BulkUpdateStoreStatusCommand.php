<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Command;

/**
 * Toggles store status on bulk action
 */
class BulkUpdateStoreStatusCommand
{
    /**
     * @param bool $expectedStatus
     * @param array<int, int> $storeIds
     */
    public function __construct(bool $expectedStatus, array $storeIds)
    {
    }
    /**
     * @return array<int, StoreId>
     */
    public function getStoreIds(): array
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus(): bool
    {
    }
}
