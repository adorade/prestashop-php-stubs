<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Query;

class GetStoreForEditing
{
    /**
     * @param int $storeId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Store\Exception\StoreException
     */
    public function __construct($storeId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId
     */
    public function getStoreId(): \PrestaShop\PrestaShop\Core\Domain\Store\ValueObject\StoreId
    {
    }
}
