<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Repository;

/**
 * Provides methods to access data storage for shop
 */
class ShopRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param ShopId $shopId
     *
     * @return Shop
     *
     * @throws ShopNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Shop
    {
    }
    public function getShopName(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): string
    {
    }
    /**
     * @param ShopId $shopId
     *
     * @throws ShopNotFoundException
     */
    public function assertShopExists(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
}
