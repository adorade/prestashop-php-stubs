<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\QueryResult;

/**
 * Store information for editing
 */
class StoreForEditing
{
    /**
     * @param int $storeId
     * @param bool $isActive
     */
    public function __construct(int $storeId, bool $isActive)
    {
    }
    /**
     * @return int
     */
    public function getStoreId(): int
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
}
