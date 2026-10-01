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
     * @return \PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId
     */
    public function getStoreId(): \PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId
    {
    }
}
