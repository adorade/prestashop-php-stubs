<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Query;

class GetStoreForEditing
{
    /**
     * @param int $storeId
     *
     * @throws StoreException
     */
    public function __construct($storeId)
    {
    }
    /**
     * @return StoreId
     */
    public function getStoreId(): \PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId
    {
    }
}
