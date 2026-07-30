<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Command;

/**
 * Toggles store status
 */
class ToggleStoreStatusCommand
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
