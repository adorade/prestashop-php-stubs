<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Command;

/**
 * Deletes store
 */
class DeleteStoreCommand
{
    /**
     * @param int $storeId
     */
    public function __construct(int $storeId)
    {
    }
    /**
     * @return StoreId
     */
    public function getStoreId(): \PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId
    {
    }
}
