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
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \Shop
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Shop
    {
    }
    public function getShopName(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): string
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopNotFoundException
     */
    public function assertShopExists(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    public function getAssociatedShopIds(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    public function getAllShopIds(): array
    {
    }
}
